<div class="mt-16">
    <div>
        <h1 class="font-roboto font-semibold text-2xl mb-4">Popular News</h1>
        <hr class="w-20 border border-primary">
    </div>
    <div class="grid grid-cols-6 mt-10 gap-3">
        <div class="grid sm:grid-cols-1 md:grid-cols-3 col-span-2 md:col-span-4 gap-4">
            @foreach ($popularNews['articles'] as $popularNews)
                <div class="">
                    <a href="{{ $popularNews['url'] }}">
                        <div>
                            <img src="{{ $popularNews['urlToImage'] }}" alt="{{ $popularNews['url'] }}"
                                class="w-full box-border h-32">
                        </div>
                        <div class="mt-4">
                            <p class="text-secondary text-sm font-sans uppercase">
                                {{ \Carbon\Carbon::parse($popularNews['publishedAt'])->format('d F Y') }}</p>
                            <h4 class="font-roboto text-md mt-1 font-semibold hover:underline">
                                {{ \Illuminate\Support\Str::limit($popularNews['title'], 50, '...') }}</h4>
                            <p class="mt-1">
                                {{ \Illuminate\Support\Str::limit($popularNews['description'], 120, '...') }}
                            </p>
                            <p class="text-xs font-sans mt-3">Source <span
                                    class="text-primary">{{ $popularNews['source']['name'] ?? '' }}</span>
                            </p>
                            <div class="flex flex-row justify-between mt-1">
                                <p class="text-xs font-sans">
                                    By <span class="text-primary">{{ $popularNews['author'] }}</span>
                                </p>
                                <span class="text-xs font-sans">
                                    {{ \Carbon\Carbon::parse($popularNews['publishedAt'])->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


        <div class="grid grid-cols-1 col-span-4 md:col-span-2 gap-y-5 h-[100rem] overflow-auto">
            @foreach ($AllNews['articles'] as $news)
                <div class="pr-2 pl-4">
                    <a href="{{ $news['url'] }}">
                        <h3 class="font-roboto font-semibold text-lg hover:underline">{{ $news['title'] }}</h3>
                    </a>
                    <p class="text-md">{{ \Illuminate\Support\Str::limit($news['description'], 100, '...') }}</p>
                    <div class="flex flex-row justify-between items-center mt-3">
                        <div class="text-xs font-sans">
                            <i class="fa fa-pen-nib"></i>
                            <span class="text-xs font-sans text-primary">{{ $news['author'] }}</span>
                        </div>
                        <div class="text-xs font-sans">
                            <i class="fa fa-clock"></i>
                            <span
                                class="text-xs font-sans">{{ \Carbon\Carbon::parse($news['publishedAt'])->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
