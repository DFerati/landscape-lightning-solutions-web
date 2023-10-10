<div>
    <section class="relative py-16 -mt-20 overflow-hidden text-white bg-gray-800 px-4">
        <div class="h-20"></div>
        <div
            class="absolute animate-[spin_8s_linear_infinite] right-0 w-1/3 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div
            class="absolute animate-[spin_6s_linear_infinite] right-0 w-1/2 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div
            class="absolute animate-[spin_4s_linear_infinite] right-0 w-2/3 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div
            class="absolute animate-[spin_2s_linear_infinite] right-0 w-full border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div class="max-w-screen-2xl mx-auto container relative">
            <header>
                <h1 class="mt-8 text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tighter max-w-[20ch]">
                    Discover Our Natural Beauties.
                </h1>
            </header>
        </div>
    </section>
    <div class="h-px bg-gradient-to-r from-gray-800 via-primary-400 to-gray-800"></div>
    <main class="py-16 text-white bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden select-none">
        <div>
            <div class="max-w-screen-2xl mx-auto container px-4">
            </div>
            <section class="relative max-w-screen-2xl mx-auto container">
                <div class="h-70vh overflow-hidden">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            @foreach ($images as $image)
                                <div class="swiper-slide flex items-center justify-center bg-black">
                                    <div class="text-white h-70vh">
                                        <img class="object-contain h-full"
                                             src="{{ asset('Outdoor-lightning/'.$image) }}" alt="{{ $image }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </section>

            <section class="relative max-w-screen-2xl mx-auto container">
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        @foreach ($images as $image)
                            <div class="swiper-slide">
                                <picture class="text-white">
                                    <img src="{{ asset('Outdoor-lightning/'.$image) }}" alt="{{ $image }}">
                                </picture>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script>
        var galleryTop = new Swiper('.gallery-top', {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            loop: true,
            speed: 1500,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: {
                    el: '.gallery-thumbs',
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    centeredSlides: false, // Set to false to align thumbnails to the start
                }
            },
            preloadImages: false // Add this line to prevent blinking when swiping
        });
    </script>
</div>
