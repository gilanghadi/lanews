<nav class="block lg:flex lg:flex-row w-full bg-card fixed z-50 inset-x-0 px-10 p-5">
    <div class="flex flex-row relative">
        <div class="header mr-5">
            <h1 class="font-bold text-2xl font-roboto">La<span class="text-primary">News</span>.</h1>
        </div>
        <div class="absolute inset-y-0 right-10 flex items-center lg:hidden">
            <!-- Mobile menu button-->
            <button type="button" id="mobile-menu"
                class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div class="navbar-nav hidden lg:flex lg:flex-row w-full">
        <ul class="flex flex-row gap-x-4 items-center">
            <li class="border-r border-r-secondary px-3"><a href="{{ route('homepage') }}"
                    class="hover:text-primary">Home</a></li>
            <li class="border-r border-r-secondary px-3">
                <a href="{{ route('content') . 'business' }}" class="hover:text-primary">Business</a>
            </li>
            <li class="border-r border-r-secondary px-3 ">
                <a href="{{ route('content') . 'entertainment' }}" class="hover:text-primary">Entertainment</a>
            </li>
            <li class="border-r border-r-secondary px-3 ">
                <a href="{{ route('content') . 'technology' }}" class="hover:text-primary">Technology</a>
            </li>
            <li class="border-r border-r-secondary px-3 "><a href="{{ route('content') . 'sports' }}"
                    class="hover:text-primary">Sports</a></li>
            <li class="border-r border-r-secondary px-3 ">
                <a href="{{ route('allnews') . '?q=bitcoin' }}" class="hover:text-primary">All
                    News</a>
            </li>
        </ul>
        <div class="ms-auto">
            <form action="{{ route('allnews') }}" method="GET">
                <input type="text"
                    class="rounded-md border-0 py-1.5 pl-4 pr-20 text-secondary ring-1 ring-inset ring-secondary placeholder:text-secondary focus:ring-2 focus:ring-secondary sm:text-sm sm:leading-6"
                    name="q" id="search" value="{{ $keyword ?? '' }}" placeholder="Search...">
            </form>
        </div>
    </div>

    <div class="navbar-nav hidden w-full mt-4" id="menu-mobile">
        <div class="ms-auto mb-2">
            <form action="{{ route('allnews') }}" method="GET">
                <input type="text"
                    class="rounded-md border-0 py-1.5 pl-4 pr-20 text-secondary ring-1 ring-inset ring-secondary placeholder:text-secondary focus:ring-2 focus:ring-secondary sm:text-sm sm:leading-6"
                    name="q" id="search" value="{{ $keyword ?? '' }}" placeholder="Search...">
            </form>
        </div>
        <ul class="block">
            <li class="border-r border-r-secondary px-3 mb-2">
                <a href="{{ route('homepage') }}" class="hover:text-primary">Home</a>
            </li>
            <li class="border-r border-r-secondary px-3 mb-2">
                <a href="{{ route('content') . 'business' }}" class="hover:text-primary">Business</a>
            </li>
            <li class="border-r border-r-secondary px-3 mb-2">
                <a href="{{ route('content') . 'entertainment' }}" class="hover:text-primary">Entertainment</a>
            </li>
            <li class="border-r border-r-secondary px-3 mb-2">
                <a href="{{ route('content') . 'technology' }}" class="hover:text-primary">Technology</a>
            </li>
            <li class="border-r border-r-secondary px-3 mb-2">
                <a href="{{ route('content') . 'sports' }}" class="hover:text-primary">Sports</a>
            </li>
            <li class="border-r border-r-secondary px-3 mb-2">
                <a href="{{ route('allnews') . '?q=bitcoin' }}" class="hover:text-primary">All
                    News</a>
            </li>
        </ul>

    </div>
</nav>
