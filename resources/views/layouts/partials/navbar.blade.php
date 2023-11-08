<nav class="flex flex-row w-full bg-card fixed z-50 inset-x-0 px-10 p-5">
    <div class="header mr-5">
        <h1 class="font-bold text-2xl font-roboto">La<span class="text-primary">News</span>.</h1>
    </div>
    <div class="navbar-nav flex flex-row w-full">
        <ul class="flex flex-row gap-x-4 items-center">
            <li class="border-r border-r-secondary px-3"><a href="{{ route('homepage') }}"
                    class="hover:text-primary">Home</a></li>
            <li class="border-r border-r-secondary px-3"><a href="{{ route('content') . 'business' }}"
                    class="hover:text-primary">Business</a></li>
            <li class="border-r border-r-secondary px-3"><a href="{{ route('content') . 'entertainment' }}"
                    class="hover:text-primary">Entertainment</a></li>
            <li class="border-r border-r-secondary px-3"><a href="{{ route('content') . 'technology' }}"
                    class="hover:text-primary">Technology</a></li>
            <li class="border-r border-r-secondary px-3"><a href="{{ route('content') . 'sports' }}"
                    class="hover:text-primary">Sports</a></li>
            <li class="border-r border-r-secondary px-3"><a href="{{ route('allnews') . '?q=bitcoin' }}"
                    class="hover:text-primary">All
                    News</a></li>
        </ul>
        <div class="ms-auto">
            <form action="{{ route('allnews') }}" method="GET">
                <input type="text"
                    class="rounded-md border-0 py-1.5 pl-4 pr-20 text-secondary ring-1 ring-inset ring-secondary placeholder:text-secondary focus:ring-2 focus:ring-secondary sm:text-sm sm:leading-6"
                    name="q" id="search" value="{{ $keyword ?? '' }}" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>
