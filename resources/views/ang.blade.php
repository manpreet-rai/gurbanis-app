@extends('layout')

@section('title')
    Ang {{ $ang }} - SGGS
@endsection

@section('root')
    <div class="max-w-[98%] md:max-w-[87%] mx-auto px-2 md:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row w-full gap-y-4 md:gap-y-0 justify-between items-center text-white my-6">
            <div class="flex w-full md:w-[100%] justify-center items-center gap-6">
                <a class="nav prev text-white hover:text-pink-400" href="/sggs/@if($ang===1){{1}}@else{{$ang-1}}@endif">« Previous</a>
                <div>
                    <input class="ang px-2 w-16 text-center text-black" type="text" placeholder="Ang" value="{{$ang}}">
                    <input class="go-button page-button px-2 rounded-sm" type="submit" value="Go">
                </div>
                <a class="nav next text-white hover:text-pink-400" href="/sggs/@if($ang===1430){{1430}}@else{{$ang+1}}@endif">Next »</a>
            </div>

            <div class="hidden flex w-full md:w-[50%] justify-center items-center gap-x-2">
                <label for="speed">Auto-Scroll Speed</label>
                <input class="slider" type="range" name="speed" id="speed" min="0" max="5" value="0">
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-x-0 gap-y-6 lg:gap-x-6 lg:gap-y-0">
            <div class="px-4 w-full lg:w-[80%] shabad shabad-border shadow-lg">
                <div id="audio-player" class="flex justify-center my-8 scale-90 md:scale-75">
                    <audio id="ang-audio" preload="auto" crossorigin>
                        <source src="/assets/Angs/{{ $audio }}" type="audio/mpeg">
                    </audio>
                </div>

                <div id="data">
                    @foreach($data as $datum)
                        <div id="l_{{$datum->_ID}}" class="mb-8 lg:mb-12 md:px-8 text-black">
                            <h1 class="gurbani gurmukhi text-md md:text-lg lg:text-xl gurmukhi-noto-serif mb-3"><span class="color-headings font-medium rounded-sm px-2 py-1">{{ $datum->GURMUKHI_UNICODE }}</span></h1>
                            <h1 class="gurbani devanagari lg:text-lg devanagari-noto-serif">{{ $datum->DEVANAGARI_UNICODE }}</h1>
                            <h1 class="gurbani pronunciation -mt-1 fira-sans text-pink-900">{{ $datum->PRONUNCIATION_ENGLISH }}</h1>

                            <p class="gurbani english lg:text-md fira-sans leading-normal text-blue-900 mt-1">{{ $datum->ENGLISH_TRANS }}</p>
                            <p class="gurbani shabad_arth gurmukhi-noto-serif text-gray-600 my-1">{{ $datum->SHABAD_ARTH_UNICODE }}</p>
                            <p class="gurbani viakhia gurmukhi-noto-serif mb-1">{{ $datum->BHAV_ARTH_UNICODE }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="flex w-full justify-center items-center gap-6 my-6">
                    <a class="nav prev text-blue-900 hover:text-pink-700" href="/sggs/@if($ang===1){{1}}@else{{$ang-1}}@endif">« Previous</a>
                    <div>
                        <input class="ang px-2 w-16 text-center text-black" type="text" placeholder="Ang" value="{{$ang}}">
                        <input class="go-button page-button px-2 rounded-sm" type="submit" value="Go">
                    </div>
                    <a class="nav next text-blue-900 hover:text-pink-700" href="/sggs/@if($ang===1430){{1430}}@else{{$ang+1}}@endif">Next »</a>
                </div>
            </div>

            <div class="w-full lg:w-[20%] text-white pb-12">
                @include('sggs-index')

                <h3 class="mt-8 border-b border-dashed border-white">Settings</h3>
                <div class="flex flex-col gap-y-2 my-2">
                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_devanagari" id="settings_devanagari" checked onclick="changeSettings(this.id, 'devanagari')">
                        <label for="settings_devanagari">Devanagari</label>
                    </div>

                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_pronunciation" id="settings_pronunciation" checked onclick="changeSettings(this.id, 'pronunciation')">
                        <label for="settings_pronunciation">Pronunciation</label>
                    </div>

                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_english" id="settings_english" checked onclick="changeSettings(this.id, 'english')">
                        <label for="settings_english">English</label>
                    </div>

                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_shabad_arth" id="settings_shabad_arth" checked onclick="changeSettings(this.id, 'shabad_arth')">
                        <label for="settings_shabad_arth">Shabad Arth</label>
                    </div>

                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_viakhia" id="settings_viakhia" checked onclick="changeSettings(this.id, 'viakhia')">
                        <label for="settings_viakhia">Viakhia</label>
                    </div>

                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_center" id="settings_center" onclick="changeSettings(this.id, 'gurbani')">
                        <label for="settings_center">Center Text</label>
                    </div>

                    <div class="hover:text-pink-400">
                        <input class="bg-pink-100 border-pink-300 text-pink-500 focus:ring-pink-200 mr-2" type="checkbox" name="settings_autoplay" id="settings_autoplay" onclick="changeSettings(this.id, 'audio')">
                        <label for="settings_autoplay">Autoplay</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
