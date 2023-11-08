@extends('layouts.main')

@section('content')
    <div class="grid grid-cols-2 gap-5 pt-32">
        <div class="border-r border-r-secondary px-3">
            <h1 class="text-5xl font-semibold leading-tight w-full font-roboto">Most <span
                    class="text-primary">Sensational</span>
                News of The Week
            </h1>
            <p class="font-sans mt-3 text-secondary font-semibold">Various event that became the main news headline during
                the week and
                became the subject
                of discussion
                throughout the week</p>
            <div class="w-full h-48 box-border mt-5">
                <a href="{{ $latestNewsTop['articles'][0]['url'] }}">
                    <div class="relative">
                        <div class="bg-primary z-10 absolute top-10 left-0 px-4 py-2 uppercase font-roboto text-white">top
                            news
                        </div>
                        <div class="bg-gradient absolute inset-x-0 inset-y-0"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="font-roboto text-lg mt-1 text-white font-bold hover:underline">
                                {{ \Illuminate\Support\Str::limit($latestNewsTop['articles'][0]['title'], 50, '...') }}</h4>
                            <p class="text-xs font-sans text-white mt-3">Source
                                {{ $latestNewsTop['articles'][0]['source']['name'] }}</p>
                            <div class="flex flex-row justify-between mt-1">
                                <p class="text-xs font-sans text-white">By {{ $latestNewsTop['articles'][0]['author'] }}
                                </p>
                                <span class="text-xs font-sans text-white">
                                    {{ \Carbon\Carbon::parse($latestNewsTop['articles'][0]['publishedAt'])->diffForHumans() }}</span>
                            </div>
                        </div>
                        <img src="{{ $latestNewsTop['articles'][0]['urlToImage'] }}"
                            alt="{{ $latestNewsTop['articles'][0]['url'] }}" class="w-full">
                    </div>
                </a>
            </div>
        </div>
        <article>
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-roboto font-semibold text-2xl">Latest News</h1>
                <a href="{{ route('allnews') }}" class="text-secondary font-roboto text-sm">View All</a>
            </div>
            <div class="grid grid-cols-2 gap-5 mt-4">
                @foreach ($latestNews['articles'] as $latestNew)
                    <div class="h-48 mb-16">
                        <a href="{{ $latestNew['url'] }}">
                            <div>
                                <img src="{{ $latestNew['urlToImage'] }}" alt="{{ $latestNew['url'] }}"
                                    class="w-full box-border h-32">
                            </div>
                            <div class="mt-4">
                                <p class="text-secondary text-sm font-sans uppercase">
                                    {{ \Carbon\Carbon::parse($latestNew['publishedAt'])->format('d F Y') }}</p>
                                <h4 class="font-roboto text-md mt-1 font-semibold hover:underline">
                                    {{ \Illuminate\Support\Str::limit($latestNew['title'], 50, '...') }}</h4>
                                <p class="text-xs font-sans mt-3">Source <span
                                        class="text-primary">{{ $latestNew['source']['name'] }}</span></p>
                                <div class="flex flex-row justify-between mt-1">
                                    <p class="text-xs font-sans">
                                        By <span class="text-primary">{{ $latestNew['author'] }}</span>
                                    </p>
                                    <span class="text-xs font-sans">
                                        {{ \Carbon\Carbon::parse($latestNew['publishedAt'])->diffForHumans() }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </article>
    </div>

    @include('News.popular')
@endsection
