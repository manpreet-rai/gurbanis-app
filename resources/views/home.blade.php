@extends('layout')

@section('title')
    Granth Sahib
@endsection

@section('root')
    <div class="max-w-[98%] md:max-w-[87%] mx-auto px-2 md:px-6 lg:px-8 shadow-lg">
        <div class="nav-dark p-4 md:p-8 lg:p-10 text-white">
            <div>
                <h1 class="text-xl">Hukamnama</h1>
                <h2 class="font-light">From Sri Darbar Sahib</h2>
                <h2 class="font-light border-t border-dashed border-white">{{ $data['date']['english'] }}</h2>
            </div>

            <div class="my-6">
                <h1 class="text-center text-lg md:text-xl lg:text-3xl gurmukhi-noto-serif">{{ $data['hukamnama']['gurmukhi'][0] }}</h1>
                <p class="md:text-md lg:text-lg gurmukhi-noto-serif py-2 text-justify">
                    {{ implode(' ', array_slice($data['hukamnama']['gurmukhi'], 1)) }}
                </p>

                <h1 class="text-center text-lg md:text-xl lg:text-3xl devanagari-noto-serif pt-4">{{ $data['hukamnama']['devanagari'][0] }}</h1>
                <p class="md:text-md lg:text-lg devanagari-noto-serif py-2 text-justify">
                    {{ implode(' ', array_slice($data['hukamnama']['devanagari'], 1)) }}
                </p>

                <h1 class="text-center text-lg md:text-xl lg:text-3xl gurmukhi-noto-serif pt-4">ਵਿਆਖਿਆ</h1>
                <p class="md:text-md lg:text-lg gurmukhi-noto-serif py-2 text-justify">
                    {{ $data['hukamnama']['combinedpunjabi'] }}
                </p>

                <h1 class="text-center text-md md:text-lg lg:text-2xl fira-sans pt-4">{{ $data['hukamnama']['english'][0] }}</h1>
                <p class="lg:text-md fira-sans py-2 leading-snug lg:leading-normal text-justify">
                    {{ implode(' ', array_slice($data['hukamnama']['english'], 1)) }}
                </p>
            </div>

            <div>
                <h2 class="font-light gurmukhi-noto-serif pt-2">ਅੰਗ: <a class="underline md:no-underline hover:underline" href="/sggs/{{ $data['info']['ang'] }}">{{ $data['info']['ang'] }}</a>, {{ $data['info']['raag_unicode'] }}, {{ $data['info']['writer_unicode'] }}</h2>
                <h2 class="font-light fira-sans">Ang: <a class="underline md:no-underline hover:underline" href="/sggs/">{{ $data['info']['ang'] }}</a>, {{ $data['info']['raag_english'] }}, {{ $data['info']['writer_english'] }}</h2>
            </div>
        </div>

        <div class="shabad p-4 md:p-8 lg:p-10 text-white">
            <div>
                <h1 class="text-xl">Shabad For You</h1>
                <h2 class="font-light">Generated Randomly</h2>
                <h2 class="font-light border-t border-dashed border-blue-800">{{ date('l, F j, Y') }}</h2>
            </div>

            <div class="my-6">
                <h1 class="text-center text-lg md:text-xl lg:text-3xl gurmukhi-noto-serif">{{ $shabad[0]['GURMUKHI_UNICODE'] }}</h1>
                <p class="md:text-md lg:text-lg gurmukhi-noto-serif py-2 text-justify">
                    @for($idx = 1; $idx < sizeof($shabad); $idx++)
                        {{ $shabad[$idx]['GURMUKHI_UNICODE'] }}
                    @endfor
                </p>

                <h1 class="text-center text-lg md:text-xl lg:text-3xl devanagari-noto-serif pt-4">{{ $shabad[0]['DEVANAGARI_UNICODE'] }}</h1>
                <p class="md:text-md lg:text-lg devanagari-noto-serif py-2 text-justify">
                    @for($idx = 1; $idx < sizeof($shabad); $idx++)
                        {{ $shabad[$idx]['DEVANAGARI_UNICODE'] }}
                    @endfor
                </p>

                <h1 class="text-center text-lg md:text-xl lg:text-3xl gurmukhi-noto-serif pt-4">ਵਿਆਖਿਆ</h1>
                <p class="md:text-md lg:text-lg gurmukhi-noto-serif py-2 text-justify">
                    @for($idx = 0; $idx < sizeof($shabad); $idx++)
                        {{ $shabad[$idx]['BHAV_ARTH_UNICODE'] }}
                    @endfor
                </p>

                <h1 class="text-center text-md md:text-lg lg:text-2xl fira-sans pt-4">{{ $shabad[0]['ENGLISH_TRANS'] }}</h1>
                <p class="lg:text-md fira-sans py-2 leading-snug lg:leading-normal text-justify">
                    @for($idx = 1; $idx < sizeof($shabad); $idx++)
                        {{ $shabad[$idx]['ENGLISH_TRANS'] }}
                    @endfor
                </p>
            </div>

            <div>
                <h2 class="font-light gurmukhi-noto-serif pt-2">ਅੰਗ: <a class="underline md:no-underline hover:underline" href="/sggs/{{ $shabad[0]['ANG_ID'] }}">{{ $shabad[0]['ANG_ID'] }}</a>, {{ $shabad[0]['INFO_GURMUKHI_UNICODE'] }}</h2>
                <h2 class="font-light fira-sans">Ang: <a class="underline md:no-underline hover:underline" href="/sggs/{{ $shabad[0]['ANG_ID'] }}">{{ $shabad[0]['ANG_ID'] }}</a>, {{ $shabad[0]['ENGLISH_TRANS'] }}</h2>
            </div>
        </div>
    </div>
@endsection
