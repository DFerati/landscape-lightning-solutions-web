<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title>{{ config('app.name', 'Azana') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="zoom: 1;" class="font-poppins antialiased text-gray-800 flex flex-col">
<header class="relative z-10 text-white" x-data="{ open: false }">
    <div class="container relative z-10 mx-auto max-w-screen-2xl pt-10">
        <nav
            class="fixed top-0 right-0 w-full flex items-center justify-around gap-12 bg-gradient-to-br from-gray-800 to-gray-900">
            <a href="#" class="inline-flex items-center gap-3 text-lg font-bold md:text-xl">
                <div class="flex items-center justify-center w-10 h-10 rounded-lg">
                    <img src="{{asset('images/logo-no-text.png')}}" alt="">
                </div>
                <span>Landscape Lightning Solutions LLC</span>
            </a>
            <ul class="items-center hidden gap-8 text-sm font-medium lg:flex">
                <li>
                    <a class="transition relative h-20 inline-flex items-center border-t-2 {{ request()->routeIs('home') ? 'text-primary-700  border-primary-700' : 'border-transparent text-white hover:text-primary-700' }}"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="h-4 border-l border-gray-600"></li>
                <li>
                    <a class="transition relative h-20 inline-flex items-center border-t-2 {{ request()->routeIs('galleries') ? 'text-primary-700  border-primary-700' : 'border-transparent text-white hover:text-primary-700' }}"
                       href="{{ route('galleries') }}">Galleries</a>
                </li>
                <li class="h-4 border-l border-gray-600"></li>
                <li>
                    <a class="transition relative h-20 inline-flex items-center border-t-2 {{ request()->routeIs('about-us') ? 'text-primary-700  border-primary-700' : 'border-transparent text-white hover:text-primary-700' }}"
                       href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="h-4 border-l border-gray-600"></li>
                <li>
                    <a class="transition relative h-20 inline-flex items-center border-t-2 {{ request()->routeIs('services') ? 'text-primary-700  border-primary-700' : 'border-transparent text-white hover:text-primary-700' }}"
                       href="{{ route('services') }}">Services</a>
                </li>
                <li class="h-4 border-l border-gray-600"></li>

                <li>
                    <a class="transition relative h-20 inline-flex items-center border-t-2 {{ request()->routeIs('faqs') ? 'text-primary-700  border-primary-700' : 'border-transparent text-white hover:text-primary-700' }}"
                       href="{{ route('faqs') }}">FAQs</a>
                </li>
                <li class="h-4 border-l border-gray-600"></li>

                <li>
                    <a class="transition relative h-20 inline-flex items-center border-t-2 {{ request()->routeIs('contact') ? 'text-primary-700  border-primary-700' : 'border-transparent text-white hover:text-primary-700' }}"
                       href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="h-4 border-l border-gray-600"></li>
                <li class="transition relative h-20 inline-flex items-center text-gray-300">
                    <x:icons.phone-incoming class="h-5 w-5 text-primary-700"/>
                    <span class="ml-2">+1 (608) 209-0017</span>
                </li>
            </ul>
            <button type="button" x-on:click="open = !open"
                    class="flex items-center justify-center gap-3 p-2 pl-3 text-sm font-medium text-gray-200 bg-gray-700 rounded lg:hidden border-b-transparent border-y border-t-gray-600">
                <span x-text="open ? 'Close' : 'Menu'">Menu</span>
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                </svg>
            </button>
        </nav>
    </div>
</header>
<main class="font-poppins">
    {{$slot}}
</main>
<footer class="relative py-16 overflow-hidden text-white bg-gradient-to-b from-gray-800 to-gray-900 px-4">
    <div class="absolute inset-x-0 top-0 flex flex-col items-center">
        <div class="w-1/2 h-2 rounded-b-full blur-xl bg-gradient-to-b from-primary-900 to-primary-700"></div>
    </div>
    <div class="max-w-screen-2xl mx-auto container relative flex flex-col items-center max-w-xl">
        <a href="#" class="inline-flex items-center gap-3 text-xl font-bold">
            <div
                class="flex items-center justify-center w-28 h-14 rounded-lg">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
        </a>
        <p class="mt-16 text-sm text-gray-400">© 2023 Landscape Lightning Solutions
            <span class="px-2">·</span>
            <a href="#">email@email.com</a></p>
    </div>
</footer>
</body>
<script>
    function handleIntersectionSeparator(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('glow');
            } else {
                entry.target.classList.remove('glow');
            }
        });
    }

    function createObserverSeparator(targetElementSelector) {
        const options = {
            root: null,
            rootMargin: '0px',
        };

        const observer = new IntersectionObserver(handleIntersectionSeparator, options);
        const targetElements = document.querySelectorAll(targetElementSelector);

        targetElements.forEach(targetElement => {
            observer.observe(targetElement);
        });
    }

    createObserverSeparator('.separator');
</script>
@livewireScripts
</html>
