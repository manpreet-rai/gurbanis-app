@extends('layout')

@section('title')
    Granth Sahib
@endsection

@section('root')
    <div class="max-w-[98%] md:max-w-[87%] mx-auto px-2 md:px-6 lg:px-8 shadow-lg">
        <div class="shabad p-4 md:p-8 lg:p-10 text-white">
            <h1 class="text-xl border-b border-dashed border-blue-800">Search results for: {{$query}}</h1>

            <div class="my-6">
                @foreach($data as $datum)
                    <div class="mt-8 lg:mt-12 text-black">
                        <a href="/sggs/{{$datum->ANG_ID}}#l_{{$datum->_ID}}" class="gurbani gurmukhi text-md md:text-lg lg:text-xl gurmukhi-noto-serif mb-3 block hover:underline" style="color: #4F5B93;"><span class="color-headings font-medium rounded-sm px-2 py-1">{{ $datum->GURMUKHI_UNICODE }}</span></a>
                        <a href="/sggs/{{$datum->ANG_ID}}#l_{{$datum->_ID}}" class="gurbani devanagari lg:text-lg devanagari-noto-serif block hover:underline">{{ $datum->DEVANAGARI_UNICODE }}</a>
                        <a href="/sggs/{{$datum->ANG_ID}}#l_{{$datum->_ID}}" class="gurbani pronunciation -mt-1 mb-1 fira-sans text-pink-900 block hover:underline">{{ $datum->PRONUNCIATION_ENGLISH }}</a>

                        <h2 class="text-sm italic fira-sans ">Source: Sri Guru Granth Sahib Ji, Ang: {{$datum->ANG_ID}}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
