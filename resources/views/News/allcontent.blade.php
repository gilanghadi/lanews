@extends('layouts.main')

@section('content')
    <div class="pt-32">
        <form action="{{ route('allnews') }}" method="GET" id="form">
            <div class="grid sm:grid-cols-3 md:grid-cols-5 gap-x-4">
                <div class="grid col-span-1 md:col-span-3">
                    <h1 class="mb-3 font-roboto font-semibold text-lg">Language</h1>
                    <div>
                        <select id="language" name="Language"
                            class="h-full rounded-md border bg-transparent py-1 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                            <option value="ar" {{ request()->get('language') == 'ar' ? 'selected' : '' }}>Arabic
                            </option>
                            <option value="de" {{ request()->get('language') == 'de' ? 'selected' : '' }}>Germany
                            </option>
                            <option value="en" {{ request()->get('language') == 'en' ? 'selected' : '' }}>English
                            </option>
                            <option value="es" {{ request()->get('language') == 'es' ? 'selected' : '' }}>Spanish
                            </option>
                            <option value="fr" {{ request()->get('language') == 'fr' ? 'selected' : '' }}>France
                            </option>
                            <option value="he" {{ request()->get('language') == 'he' ? 'selected' : '' }}>Hebrew
                            </option>
                            <option value="it" {{ request()->get('language') == 'it' ? 'selected' : '' }}>Italian
                            </option>
                            <option value="nl" {{ request()->get('language') == 'nl' ? 'selected' : '' }}>Dutch</option>
                            <option value="no" {{ request()->get('language') == 'no' ? 'selected' : '' }}>Norwegian
                            </option>
                            <option value="pt" {{ request()->get('language') == 'pt' ? 'selected' : '' }}>Portuguese
                            </option>
                            <option value="ru" {{ request()->get('language') == 'ru' ? 'selected' : '' }}>Rusian
                            </option>
                            <option value="sv" {{ request()->get('language') == 'sv' ? 'selected' : '' }}>Swedish
                            </option>
                            <option value="zh" {{ request()->get('language') == 'zh' ? 'selected' : '' }}>Chinese
                            </option>
                        </select>
                    </div>
                </div>


                <div class="grid col-span-2 md:col-span-2 mt-8 ml-5">
                    <div class="flex flex-row justify-between items-center">
                        <div>
                            <label for="sortBy" class="mr-4 font-semibold font-roboto">Sort BY</label>
                            <select id="sortBy" name="sortBy"
                                class="h-full rounded-md border bg-transparent py-1 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                <option value="relevancy" {{ request()->get('sortBy') == 'relevancy' ? 'selected' : '' }}>
                                    relevancy</option>
                                <option value="popularity"
                                    {{ request()->get('sortBy') == 'popularity' ? 'selected' : '' }}>
                                    popularity</option>
                                <option value="publishedAt"
                                    {{ request()->get('sortBy') == 'publishedAt' ? 'selected' : '' }}>publishedAt</option>
                            </select>
                        </div>
                        <div>
                            <label for="sortByDate" class="mr-4 font-semibold font-roboto">Sort By Date</label>
                            <select id="sortByDate" name="sortByDate"
                                class="h-full rounded-md border bg-transparent py-1 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                <option value="{{ date('Y-m-d', strtotime('-60 days', strtotime(date('Y-m-d')))) }}">oldest
                                </option>
                                <option value="{{ date('Y-m-d') }}">newest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="grid sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-x-4 gap-y-7 mt-16">
            @foreach ($AllNewsEverything['articles'] as $allNews)
                <div class="">
                    <div>
                        <img src="{{ $allNews['urlToImage'] }}" alt="{{ $allNews['urlToImage'] }}"
                            class="w-full box-border h-32">
                    </div>
                    <div class="mt-4">
                        <p class="text-secondary text-sm font-sans uppercase">
                            {{ \Carbon\Carbon::parse($allNews['publishedAt'])->format('d F Y') }}</p>
                        <a href="{{ $allNews['url'] }}">
                            <h4 class="font-roboto text-md mt-1 font-semibold hover:underline">
                                {{ \Illuminate\Support\Str::limit($allNews['title'], 50, '...') }}</h4>
                        </a>
                        <p class="mt-1">
                            {{ \Illuminate\Support\Str::limit($allNews['description'], 120, '...') }}
                        </p>
                        <p class="text-xs font-sans mt-3">Source <span
                                class="text-primary">{{ $allNews['source']['name'] ?? '' }}</span>
                        </p>
                        <div class="flex flex-row justify-between mt-1">
                            <p class="text-xs font-sans">
                                By <span class="text-primary"><a href="{{ $allNews['author'] }}">Author</a></span>
                            </p>
                            <span class="text-xs font-sans">
                                {{ \Carbon\Carbon::parse($allNews['publishedAt'])->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('custom-js')
    <script type="text/javascript">
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 4,
            perMove: 1,
            gap: '1rem',
        });

        splide.mount();
    </script>

    <script>
        $(document).on('change', '#sortByDate', function(e) {
            e.preventDefault()
            $('#form').submit()
        })

        $(document).on('change', '#sortBy', function(e) {
            e.preventDefault()
            $('#form').submit()
        })

        $(document).on('change', '#Language', function(e) {
            e.preventDefault()
            $('#form').submit()
        })
    </script>
@endsection
