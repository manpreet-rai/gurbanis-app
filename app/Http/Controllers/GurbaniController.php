<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class GurbaniController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | API Routes (From routes/api.php)
    |--------------------------------------------------------------------------
    |
    | Route::get('/find/{type}/{query}', [GurbaniController::class, 'find']);
    |
    | Route::get('/hukamnama/{date}', [GurbaniController::class, 'hukamnama']);
    |
    | Route::get('/{type}/{ids}', [GurbaniController::class, 'fetch']);
    |
    */

    /**
     * Declaring properties of GurbaniController.
     */
    private string $type;

    private string $ids;

    private string $ang;

    private string $angs;

    private string $line;

    private string $lines;

    private string $shabad;

    private string $shabads;

    private string $findGurmukhi;

    private string $findDevanagari;

    private string $findEnglish;

    private array $range;

    /**
     * Instantiate a new GurbaniController instance.
     */
    public function __construct()
    {
        DB::unprepared('SET SESSION group_concat_max_len=65535');
        $this->ang = 'ANG_ID = ?';
        $this->angs = 'ANG_ID BETWEEN ? AND ?';

        $this->line = '_ID = ?';
        $this->lines = '_ID BETWEEN ? AND ?';

        $this->shabad = 'SHABAD_ID = ?';
        $this->shabads = 'SHABAD_ID BETWEEN ? AND ?';

        $this->findGurmukhi = 'GURMUKHI_UNICODE_LETTERS LIKE ?';
        $this->findDevanagari = 'DEVANAGARI_UNICODE_LETTERS LIKE ?';
        $this->findEnglish = 'ENGLISH_FIRST_LETTERS LIKE ?';

        $this->range = [
            'ang' => [1, 1430], // Angs can range from 1-1430
            'line' => [1, 60399], // Lines can range from 1-60399
            'shabad' => [0, 4238], // Shabads can range from 0-4238
        ];
    }

    /**
     * Builds the SQL query from partial
     *
     * @return string $query
     */
    private function queryBuilder(string $partial): string
    {
        return "SELECT _ID, ANG_ID, LINE_ID, SHABAD_ID, GURMUKHI, GURMUKHI_UNICODE, ENGLISH_TRANS, DEVANAGARI_UNICODE,
                BHAV_ARTH_UNICODE, SHABAD_ARTH_UNICODE, PRONUNCIATION_ENGLISH,
                CONCAT_WS(' ', RAAG_UNICODE, AUTHOR_UNICODE) AS INFO_GURMUKHI_UNICODE,
                CONCAT_WS(' ', RAAG_UNICODE_DEVANAGARI, AUTHOR_UNICODE_DEVANAGARI) AS INFO_DEVANAGARI_UNICODE
        FROM shabad_id where $partial AND SOURCE_ID = 'SGGS'";
    }

    /**
     * Send gurbani data or error as json response or file.
     *
     * @param  array  $data contains data or error message
     * @param  int  $status 200 | 404
     */
    private function sendResponse(array $data, int $status): BinaryFileResponse|JsonResponse
    {
        if (Request::get('download') === 'yes') {
            $filename = $this->type.'_'.$this->ids.'.json';
            Storage::disk('public')->put($filename, json_encode($data, JSON_UNESCAPED_UNICODE));

            return Response::download(public_path('storage/'.$filename));
        } else {
            return response()->json($data, $status, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }

    /**
     * Get gurbani data for a particular ang or line.
     *
     * @param  string  $type ang | angs | line | lines | shabad | shabads
     * @param  string  $ids ang -> 1-1430 | line -> 1-60399 | shabad -> 0-4238
     */
    public function fetch(string $type, string $ids): BinaryFileResponse|JsonResponse
    {
        $this->type = $type;
        $this->ids = $ids;

        if (preg_match('/\b(ang|line|shabad)\b/', $type)) {
            $query = $this->queryBuilder($this->$type);
            $limits = $this->range[$type];

            $id = preg_replace('/\D+/', '', $ids);
            if ($id >= $limits[0] and $id <= $limits[1]) {
                return $this->sendResponse(DB::select($query, [$id]), 200);
            }

            return $this->sendResponse(['error' => "$type must be between $limits[0]-$limits[1]"], 404);
        } elseif (preg_match('/\b(angs|lines|shabads)\b/', $type)) {
            $query = $this->queryBuilder($this->$type);
            $limits = $this->range[substr($type, 0, strlen($type) - 1)];

            $range = explode('-', preg_replace('/-+/', '-', preg_replace('/[\s[:alpha:]]+/', '', $ids)));
            if (count($range) == 2 and $range[0] >= $limits[0] and $range[0] <= $limits[1] and $range[1] >= $limits[0] and $range[1] <= $limits[1] and $range[1] > $range[0]) {
                return $this->sendResponse(DB::select($query, $range), 200);
            }

            return $this->sendResponse(['error' => "$type must be between $limits[0]-$limits[1] and second value must be greater than first"], 404);
        } else {
            return $this->sendResponse(['error' => 'invalid request', 'options' => 'angs -> 1-1430, lines -> 1-60399, shabads -> 0-4238'], 404);
        }
    }

    /**
     * Find matching gurbani string in SGGS.
     *
     * @param  string  $type gurmukhi | english | devanagari
     * @param  string  $query first letters
     */
    public function find(string $type, string $query): JsonResponse
    {
        return match ($type) {
            'gurmukhi' => response()->json(DB::select($this->queryBuilder($this->findGurmukhi), ['%'.$query.'%']), 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE),
            'devanagari' => response()->json(DB::select($this->queryBuilder($this->findDevanagari), ['%'.$query.'%']), 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE),
            'english' => response()->json(DB::select($this->queryBuilder($this->findEnglish), ['%'.$query.'%']), 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE),
            default => response()->json(['error' => 'invalid query'], 404, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE)
        };
    }

    /**
     * Find matching gurbani string in SGGS.
     *
     * @param  string  $day today | dd-mm-yyyy
     */
    public function hukamnama(string $day = 'today'): JsonResponse
    {
        $datePattern = '/[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}/';
        if (preg_match($datePattern, $day) || $day == 'today') {
            if (preg_match($datePattern, $day)) {
                $day = explode('-', $day);
                $day = "$day[2]/$day[1]/$day[0]";
            }

            $data = Http::get("https://data.gurbaninow.com/v2/hukamnama/$day")->json();
			
            if (is_null($data) || $data['error']) {
                return response()->json(['message' => 'Hukamnama is not available for this date', 'error' => true],
                    200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
            } else {
                $date['english'] = $data['date']['gregorian']['day'].', '.$data['date']['gregorian']['month'].
                    ' '.$data['date']['gregorian']['date'].', '.$data['date']['gregorian']['year'];
                $date['nanakshahipunjabi'] = $data['date']['nanakshahi']['punjabi']['day'].', '.$data['date']['nanakshahi']['punjabi']['month'].
                    ' '.$data['date']['nanakshahi']['punjabi']['date'].', '.$data['date']['nanakshahi']['punjabi']['year'];
                $date['nanakshahienglish'] = $data['date']['nanakshahi']['english']['day'].', '.$data['date']['nanakshahi']['english']['month'].
                    ' '.$data['date']['nanakshahi']['english']['date'].', '.$data['date']['nanakshahi']['english']['year'];
                $response['date'] = $date;

                $info['ang'] = $data['hukamnamainfo']['pageno'];
                $info['writer_unicode'] = $data['hukamnamainfo']['writer']['unicode'];
                $info['writer_english'] = $data['hukamnamainfo']['writer']['english'];
                $info['raag_unicode'] = $data['hukamnamainfo']['raag']['unicode'];
                $info['raag_english'] = $data['hukamnamainfo']['raag']['english'];
                $info['startang'] = $data['hukamnamainfo']['raag']['startang'];
                $info['endang'] = $data['hukamnamainfo']['raag']['endang'];
                $response['info'] = $info;

                $hukamnama = [];
                $gurmukhi = [];
                $punjabi = [];
                $english = [];
                $spanish = [];
                $devanagari = [];
                foreach ($data['hukamnama'] as $key => $contents) {
                    $gurmukhi[$key] = $contents['line']['gurmukhi']['unicode'];
                    $punjabi[$key] = $contents['line']['translation']['punjabi']['default']['unicode'];
                    $english[$key] = $contents['line']['translation']['english']['default'];
                    $spanish[$key] = $contents['line']['translation']['spanish'];
                    $devanagari[$key] = $contents['line']['transliteration']['devanagari']['text'];
                }
                $hukamnama['gurmukhi'] = $gurmukhi;
                $hukamnama['punjabi'] = $punjabi;
                $hukamnama['english'] = $english;
                $hukamnama['spanish'] = $spanish;
                $hukamnama['devanagari'] = $devanagari;
                $hukamnama['combinedgurmukhi'] = implode(' ', $hukamnama['gurmukhi']);
                $hukamnama['combinedpunjabi'] = implode(' ', $hukamnama['punjabi']);
                $hukamnama['combinedenglish'] = implode(' ', $hukamnama['english']);
                $hukamnama['combinedspanish'] = implode(' ', $hukamnama['spanish']);
                $hukamnama['combineddevanagari'] = implode(' ', $hukamnama['devanagari']);
                $response['hukamnama'] = $hukamnama;

                $response['credits'] = 'Our API uses and modifies data fetched from GurbaniNow API - api.gurbaninow.com';
                $response['error'] = false;

                return response()->json($response, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
            }
        } else {
            return response()->json(['message' => 'Date format must be dd-mm-yyyy and from 01-01-2002 onwards', 'error' => true],
                200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
}
