<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Rasa Sulawesi</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;700&display=swap');

        .font-eb-garamond {
            font-family: 'EB Garamond', serif;
        }

        .fade-in {
            opacity: 1 !important;
        }
    </style>
    <link rel="icon" href="{{ asset('storage/images/faviconGR.png') }}" type="image/x-icon">
</head>

<body>

    <x-nav-bar />

    <!-- hero -->
    <div class="relative flex flex-col items-center justify-center bg-emerald-950 h-screen">
        <img class="absolute bottom-0 w-full object-cover z-0" src="{{asset('storage/images/ornament.png') }}" alt="Ornament">

        <!-- Content -->
        <div class="relative flex flex-col items-center z-10">
            <p class="text-center font-serif text-7xl md:text-8xl text-white font-eb-garamond">
                Celebes cuisine<br>like never before.
            </p>
            <p class="my-10 text-center text-l text-white font-light">
                Welcome to Rasa Sulawesi restaurant<br>Discover the No. 1 Celebes Culinary in Indonesia.
            </p>

            <!-- CTA -->
            <div class="flex justify-center w-full">
                <div
                    class="bg-yellow-100 hover:bg-yellow-200 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                    <a href="#" target="_blank"
                        class="block py-3 px-8 text-center text-l font-medium text-zinc-900">
                        Show me your foods!
                    </a>
                </div>
            </div>


        </div>
        <img class="absolute bottom-10 sm:bottom-5 left-5 md:left-20 sm:left-10 lg:left-40 sm:w-[210px] md:w-[270px] w-[180px]"
            src="{{asset('storage/images/heromenu.png') }}" alt="Hero Menu">
        <img style="transform: scale(-1, 1)"
            class="absolute bottom-10 sm:bottom-5 right-5 md:right-10 lg:right-40 sm:right-10  sm:w-[210px] md:w-[270px] w-[180px]"
            src="{{asset('storage/images/heromenu.png') }}" alt="Hero Menu">
    </div>

    <div class="bg-white h-full md:py-20 opacity-0 transition-opacity ease-in-out duration-1000 fade-section">
        <div class="card flex flex-col md:flex-row sm:flex-columns-reverse sm:px-10 py-10 md:space-x-10">
            <!-- image -->
            <div class="flex justify-start md:w-1/2 px-10">
                <img class="rounded-lg max-h-100 w-full object-cover object-center" src="{{asset('storage/images/kitchen.png') }}" alt="About Us" />
            </div>

            <!-- details -->
            <div class="card-detail text-zinc-900 md:w-1/2 px-10 sm:px-0">
                <div class="top font-eb-garamond text-4xl sm:text-5xl md:text-7xl py-10 md:py-0">Supa fresh from
                    Sulawesi.</div>
                <div class="middle pt-10 md:py-10 text-base sm:text-lg md:text-xl">
                    Where Sulawesi meets culinary expertise, fresh ingredients straight from the source. Every bite
                    tells a story of Indonesia's nature. Feel the warmth of Sulawesi's culture in every bite. Only here!
                    <br><br>
                    Curious to know more about our secret sauce?<br>Explore further on this page.
                </div>

            </div>

        </div>
    </div>


    <!-- menu introduction -->
    <div class="bg-emerald-950 h-full md:py-20 opacity-0 transition-opacity ease-in-out duration-1000 fade-section">
        <div class="card flex flex-col md:flex-row sm:px-10 py-10 md:space-x-10">

            <!-- details -->
            <div class="card-detail text-white md:w-1/2 px-10 sm:px-0">
                <div class="top font-eb-garamond text-4xl sm:text-5xl md:text-7xl py-10 md:py-0">
                    Appetite<br>Suppressant.</div>
                <div class="middle pt-10 md:py-10 text-base sm:text-lg md:text-xl">
                    Enjoy delicious food at our restaurant where everyone can delight in tasty dishes. Each bite is
                    designed to satisfy your stomach. Importantly, we ensure all our food is 100% halal, respecting your
                    beliefs and dietary needs.
                    <br><br>
                    Rest assured, your trust and satisfaction are our top priorities.
                </div>
                <div class="flex w-full py-10">
                    <div
                        class="bg-yellow-100 hover:bg-yellow-200 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                        <a href="#" target="_blank"
                            class="block py-3 px-8 text-center text-l font-medium text-zinc-900">
                            Open Menu
                        </a>
                    </div>
                </div>
            </div>

            <!-- image -->
            <div class="flex justify-start md:w-1/2 px-10">
                <img class="rounded-lg max-h-100 w-full object-cover object-left" src="{{asset('storage/images/sate.png') }}" alt="About Us" />
            </div>
        </div>
    </div>


    <!-- best seller section -->
    <div id="bests"
        class=" flex flex-col items-center justify-center bg-zinc-900 h-[550px] overflow-hidden space-y-10">
        <p class=" text-white font-eb-garamond text-6xl">Our Best Sellers</p>
        <div class="group saturate-0 hover:saturate-100 swiper swiper-container">
            <div class="swiper-wrapper py-5">
                <div class="swiper-slide">
                    <div class="flex space-x-0 items-center justify-center">
                        @foreach ($firstSet as $item)
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}" />
                        @endforeach
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex space-x-0 items-center justify-center">
                        @foreach ($secondSet as $item)
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}" />
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
        <div class="flex justify-center w-full">
            <div
                class="bg-yellow-100 hover:bg-yellow-200 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                <a href="#" target="_blank" class="block py-3 px-8 text-center text-l font-medium text-zinc-900">
                    See all
                </a>
            </div>
        </div>
    </div>

    <div id="maps"
        class="bg-yellow-100 h-full md:py-20 opacity-0 transition-opacity ease-in-out duration-1000 fade-section">
        <div class="card flex flex-col sm:flex-columns-reverse md:flex-row sm:px-10 py-10 md:space-x-10">

            <!-- details -->
            <div class="card-detail text-zinc-900 md:w-1/2 px-10 sm:px-0">
                <div class="top font-eb-garamond text-4xl sm:text-5xl md:text-7xl py-10 md:py-0">The adventure awaits!!
                </div>
                <div class="middle pt-10 md:py-10 text-base sm:text-lg md:text-xl">
                    Don't wait any longer!
                    Experience the deliciousness of our restaurant's food. From the tasty dishes to a cozy atmosphere,
                    we're ready to pamper your taste buds.
                    <br> <br>
                    Find joy in every bite and enjoy an unforgettable dining experience with us.
                    <br>
                    Come on, visit our restaurant today and make your evening special!
                </div>
                <div class="flex w-full py-10">
                    <div
                        class="bg-zinc-900 hover:bg-zinc-700 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                        <a href="https://maps.app.goo.gl/CdnZNXiA3os8Mn3v8" target="_blank"
                            class="block py-3 px-8 text-center text-l font-medium text-white">
                            Take a look at maps
                        </a>
                    </div>
                </div>
            </div>

            <!-- image -->
            <div class="flex justify-start md:w-1/2 px-10">
                <div class="relative w-full">
                    <iframe class="w-full h-full rounded-lg object-cover"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.484991105166!2d106.827183!3d-6.175392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6e7e71f6e43%3A0x2e2f5e7a69b5b745!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1648483010939!5m2!1sen!2sus"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <div class=" relative flex-col bg-emerald-950 h-[400px] w-full md:h-[300px] sm:h-[300px] py-10 px-10 space-y-4">
        <p class=" text-white">Visit our <strong>Instagram</strong> page to look around <br>or <strong>Message</strong>
            us to book a table for your special occasion. </p>

        <div class="flex space-x-5 opacity-90">
            <div class="flex">
                <div
                    class="text-white py-2 px-4 flex items-center bg-none border-white border-2 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                    <img src="{{ asset('ig.svg') }}" alt="">
                    <a href="https://instagram.com/resto.rasasulawesi" target="_blank"
                        class="block px-3 text-center text-l font-medium">
                        Our Instagram
                    </a>
                </div>
            </div>
            <div class="flex">
                <div
                    class="text-white py-2 px-4 flex items-center bg-none border-white border-2 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                    <img src="{{ asset('wa.svg') }}" alt="">
                    <a href="https://wa.me/081371111849" target="_blank"
                        class="block px-3 text-center text-l font-medium">
                        Book a table
                    </a>
                </div>
            </div>
        </div>

        <div class=" absolute text-white/40 bg-emerald-950 bottom-10 text-sm ">
            <div class="flex">
                <div class="bg-none">
                    <p>Rasa Sulawesi © 2024 <br>All rights reserved</p>
                </div>
                <div class="px-40 md:px-20 sm:px-20">
                    <p>Made with ♡<br>by GATES</p>
                </div>
            </div>
        </div>
    </div>


    <script>
        // navbar config 
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('navbar-sticky');
            menu.classList.toggle('hidden');
        });

        //swiper
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper', {
                direction: 'horizontal',
                loop: true,
                freeMode: false,
                speed: 5000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                slidesPerView: 'auto',
                breakpoints: {
                    0: {
                        spaceBetween: 80
                    },
                    640: {
                        spaceBetween: 0
                    }
                },
            });
        });

        // scroll to anchor
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('a[data-scroll]');

            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('data-scroll');
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });

        // fade
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('.fade-section');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, {
                threshold: 0.1
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

</body>

</html>
