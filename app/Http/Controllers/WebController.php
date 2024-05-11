<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class WebController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | API Routes (From routes/api.php)
    |--------------------------------------------------------------------------
    |
    | Route::get('/', [WebController::class, 'home']);
    |
    | Route::get('/search', [WebController::class, 'search']);
    |
    | Route::get('/nitnem', [WebController::class, 'search']);
    |
    | Route::get('/sggs/{ang?}/{shabad?}/{line?}', [WebController::class, 'fetch']);
    |
    */

    /**
     * Declaring properties of WebController.
     */
    private array $range;

    /**
     * Instantiate a new WebController instance.
     */
    public function __construct()
    {
        DB::unprepared('SET SESSION group_concat_max_len=65535');

        $this->range = [
            'ang' => [1, 1430], // Angs can range from 1-1430
            'line' => [1, 60399], // Lines can range from 1-60399
            'shabad' => [0, 4238], // Shabads can range from 0-4238
        ];
    }

    /**
     * @throws Exception
     */
    public function home(): View
    {
        $gurbaniController = new GurbaniController();

        while (true) {
            $random = random_int($this->range['shabad'][0], $this->range['shabad'][1]);
            $shabad = json_decode($gurbaniController->fetch('shabad', $random)->content(), true);

            if (count($shabad) > 3) {
                break;
            }
        }

        return view('home', ['data' => json_decode($gurbaniController->hukamnama()->content(), true), 'shabad' => $shabad, 'active' => 'home']);
    }

    /**
     * Get gurbani data for a particular ang or line.
     *
     * @param  int  $ang default 1
     * @param  int|null  $shabad default null
     * @param  int|null  $line default null
     */
    public function fetch(int $ang = 1, int $shabad = null, int $line = null): View|RedirectResponse
    {
        $query = "SELECT _ID, ANG_ID, LINE_ID, SHABAD_ID, GURMUKHI, GURMUKHI_UNICODE, ENGLISH_TRANS, DEVANAGARI_UNICODE,
                BHAV_ARTH_UNICODE, SHABAD_ARTH_UNICODE, PRONUNCIATION_ENGLISH,
                CONCAT_WS(' ', RAAG_UNICODE, AUTHOR_UNICODE) AS INFO_GURMUKHI_UNICODE,
                CONCAT_WS(' ', RAAG_UNICODE_DEVANAGARI, AUTHOR_UNICODE_DEVANAGARI) AS INFO_DEVANAGARI_UNICODE
        FROM shabad_id where ANG_ID = ? AND SOURCE_ID = 'SGGS'";

        if ($ang >= 1 and $ang <= 1430) {
            $audio = 'SGGS_Ang_'.str_pad($ang, 4, '0', STR_PAD_LEFT).' - Giani Mehnga Singh.mp3';
        } else {
            return redirect('/sggs');
        }

        return view('ang', ['data' => DB::select($query, [$ang]), 'ang' => $ang, 'shabad' => $shabad, 'line' => $line, 'active' => 'sggs', 'audio' => $audio]);
    }

    /**
     * Shows an index of available Gurbanis for Nitnem
     */
    public function nitnem(): View
    {
        return view('nitnem', ['active' => 'nitnem']);
    }

    /**
     * Display current and archived Hukamnamas.
     *
     * @param  string  $date today | dd-mm-yyyy
     */
    public function hukamnama(string $date = 'today'): View
    {
        $error = false;
        $gurbaniController = new GurbaniController();
        $data = json_decode($gurbaniController->hukamnama($date)->content(), true);
        if (is_null($data) || $data['error']) {
            $error = true;
            $data = json_decode($gurbaniController->hukamnama()->content(), true);
        }

        return view('hukamnama', ['data' => $data, 'active' => 'hukamnama', 'error' => $error]);
    }

    /**
     * Find matching gurbani string in SGGS.
     */
    public function search(): View
    {
        $t = Request::get('t');
        $q = Request::get('q');

        $partial = match ($t) {
            'gurmukhi' => 'GURMUKHI_UNICODE_LETTERS LIKE ?',
            'devanagari' => 'DEVANAGARI_UNICODE_LETTERS LIKE ?',
            default => 'ENGLISH_FIRST_LETTERS LIKE ?',
        };

        $query = "SELECT _ID, ANG_ID, SHABAD_ID, GURMUKHI, GURMUKHI_UNICODE, ENGLISH_TRANS, DEVANAGARI_UNICODE, PRONUNCIATION_ENGLISH,
                CONCAT_WS(' ', RAAG_UNICODE, AUTHOR_UNICODE) AS INFO_GURMUKHI_UNICODE,
                CONCAT_WS(' ', RAAG_UNICODE_DEVANAGARI, AUTHOR_UNICODE_DEVANAGARI) AS INFO_DEVANAGARI_UNICODE
        FROM shabad_id where $partial AND SOURCE_ID = 'SGGS'";

        return view('search', ['data' => DB::select($query, ['%'.$q.'%']), 'query' => $q, 'active' => 'home']);
    }
}
