@extends('layout')

@section('title')
    Granth Sahib
@endsection

@section('root')
    <div class="max-w-[98%] md:max-w-[87%] mx-auto px-2 md:px-6 lg:px-8 shadow-lg">
        <div class="flex w-full gap-x-2 justify-center items-center my-6">

            <label class="text-white" for="date">Day</label>
            <select class="text-sm px-2 py-0 w-14" name="date" id="date">
                @foreach(range(1, 31) as $day)
                    <option value="{{$day}}">{{$day}}</option>
                @endforeach
            </select>

            <label class="text-white ml-2" for="month">Month</label>
            <select class="text-sm px-2 py-0 w-14" name="month" id="month">
                @foreach(range(1, 12) as $month)
                    <option value="{{$month}}">{{$month}}</option>
                @endforeach
            </select>

            <label class="text-white ml-2" for="year">Year</label>
            <select class="text-sm px-2 py-0 w-20" name="year" id="year">
                @foreach(range(intval(date('Y')),  2002, -1) as $year))
                    <option value="{{$year}}">{{$year}}</option>
                @endforeach
            </select>

            <input class="page-button px-2 rounded-sm" type="submit" id="goButton" value="Go" onclick="location.href = `/hukamnama/${$('select#date').val()}-${$('select#month').val()}-${$('select#year').val()}` ;">
        </div>

        <div class="shabad p-4 md:p-8 lg:p-10 text-white">
            @if($error)
                <h1 class="px-6 py-2 text-white bg-red-700 mb-8">&#9888; Sorry, Hukamnama is not available for selected date. Please choose another.</h1>
            @endif

            <div>
                <h1 class="text-xl">Hukamnama</h1>
                <h2 class="font-light">From Sri Darbar Sahib</h2>
                <h2 class="font-light border-t border-dashed border-blue-800">{{ $data['date']['english'] }}</h2>
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
    </div>
@endsection
