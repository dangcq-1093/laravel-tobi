<header class="fixed top-0 w-full z-50 bg-white">
    <div class="max-w-screen-2xl mx-auto md:px-16 px-6 flex flex-wrap items-center md:py-0" style="min-height: 96px;">
        <div class="flex-1 flex justify-between items-center">
            <a href="/">
                <img class="w-40 fill-current" src="/img/hmi-t.svg" alt="">
            </a>
        </div>
        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base pt-4 md:pt-0">
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 text-xl" href="#sumary-anchor">Summary</a></li>
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 text-xl" href="#description-anchor">Description</a></li>
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 text-xl" href="#timeline-anchor">Progress</a></li>
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 text-xl" href="#result-anchor">Result</a></li>
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 md:mb-0 mb-2 text-xl" href="#impact-anchor">Impact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>