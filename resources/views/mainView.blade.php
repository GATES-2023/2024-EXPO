<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Rasa Sulawesi</title>
    @vite('resources/css/app.css')
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />
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
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
</head>

<body>

    <nav id="home" class="bg-emerald-950/80 backdrop-blur-md fixed w-full z-20 top-0 start-0 border-b border-emerald-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            
            <!-- logo -->
            <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
                <img src="{{ asset('/favicon.png') }}" class="h-8" alt="Rasul Icon">
                <img src="{{ asset('/rasulicon.png') }}" class="h-8" alt="Rasul Icon">
            </a>

            <!-- CTA -->
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="https://maps.app.goo.gl/CdnZNXiA3os8Mn3v8" target="_blank" class="text-zinc-900 bg-yellow-100 hover:bg-yellow-200 focus:outline-none font-medium rounded-3xl text-sm px-4 py-2 text-center transition ease-in-out delay-100 hover:scale-110 duration-200">
                    Visit Us!
                </a>

                <!-- <button type="button" class="text-zinc-900 bg-yellow-100 hover:bg-yellow-200 focus:outline-none font-medium rounded-3xl text-sm px-4 py-2 text-center transition ease-in-out delay-100 hover:scale-110 duration-200">Visit Us!</button> -->
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false" id="menu-toggle">
                    <!-- <span class="sr-only">Open main menu</span> -->
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>

            <!-- nav items -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#" data-scroll="home" class="block py-2 px-3 text-white hover:text-yellow-100 md:text-yellow-100 md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="block py-2 px-3 text-white hover:text-yellow-100 md:hover:text-yellow-100 md:p-0">Menus</a>
                    </li>
                    <li>
                        <a href="#" data-scroll="maps" class="block py-2 px-3 text-white hover:text-yellow-100 md:hover:text-yellow-100 md:p-0">Location</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- hero -->
    <div class="relative flex flex-col items-center justify-center bg-emerald-950 h-screen">
        <img class="absolute bottom-0 w-full object-cover z-0" src="{{ asset('ornament.png') }}" alt="Ornament">
        <!-- <canvas id="ornament"/> -->
        

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
                <div class="bg-yellow-100 hover:bg-yellow-200 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                    <a href="#" target="_blank" class="block py-3 px-8 text-center text-l font-medium text-zinc-900">
                        Show me your foods!
                    </a>
                </div>
            </div>

            
        </div>
        <img class="absolute bottom-10 sm:bottom-5 left-5 md:left-20 sm:left-10 lg:left-40 sm:w-[210px] md:w-[270px] w-[180px]" src="heromenu.png" alt="Hero Menu">
        <img style="transform: scale(-1, 1)" class="absolute bottom-10 sm:bottom-5 right-5 md:right-10 lg:right-40 sm:right-10  sm:w-[210px] md:w-[270px] w-[180px]" src="heromenu.png" alt="Hero Menu">
    </div>

    <!-- about resto -->

    <!-- <div class=" bg-white h-full md:py-20 opacity-0 transition-opacity ease-in-out duration-1000 fade-section">

        <div class="card flex flex-col md:flex-row sm:flex-columns-reverse px-10 py-10">
            <img class=" flex justify-center rounded-lg max-h-100" src="kitchen.png" alt="About Us" height="300" width="700">
            
            <div class="card-detail px-10 sm:px-0 md:px-10">
                <div class="top font-eb-garamond text-7xl pt-10 md:py-0">Supa fresh from Sulawesi.</div>
                <div class="middle py-10 md:py-10 text-l">
                    Where Sulawesi meets culinary expertise, fresh ingredients straight from the source. Every bite tells a story of Indonesia's nature.
                    Feel the warmth of Sulawesi's culture in every bite. Only here!    
                    <br><br>
                    <br>Curious to know more about our secret sauce? <br>Explore further on this page.
                </div>
            </div>
        </div>
    </div> -->

    <div class="bg-white h-full md:py-20 opacity-0 transition-opacity ease-in-out duration-1000 fade-section">
        <div class="card flex flex-col md:flex-row sm:flex-columns-reverse sm:px-10 py-10 md:space-x-10">
            <!-- image -->
            <div class="flex justify-start md:w-1/2 px-10">
                <img class="rounded-lg max-h-100 w-full object-cover object-center" src="kitchen.png" alt="About Us" />
            </div>

            <!-- details -->
            <div class="card-detail text-zinc-900 md:w-1/2 px-10 sm:px-0">
                <div class="top font-eb-garamond text-4xl sm:text-5xl md:text-7xl py-10 md:py-0">Supa fresh from Sulawesi.</div>
                <div class="middle pt-10 md:py-10 text-base sm:text-lg md:text-xl">
                    Where Sulawesi meets culinary expertise, fresh ingredients straight from the source. Every bite tells a story of Indonesia's nature. Feel the warmth of Sulawesi's culture in every bite. Only here!    
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
                <div class="top font-eb-garamond text-4xl sm:text-5xl md:text-7xl py-10 md:py-0">Appetite<br>Suppressant.</div>
                <div class="middle pt-10 md:py-10 text-base sm:text-lg md:text-xl">
                    Enjoy delicious food at our restaurant where everyone can delight in tasty dishes. Each bite is designed to satisfy your stomach. Importantly, we ensure all our food is 100% halal, respecting your beliefs and dietary needs.
                    <br><br>
                    Rest assured, your trust and satisfaction are our top priorities.
                </div>
                <div class="flex w-full py-10">
                    <div class="bg-yellow-100 hover:bg-yellow-200 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                        <a href="#" target="_blank" class="block py-3 px-8 text-center text-l font-medium text-zinc-900">
                            Open Menu
                        </a>
                    </div>
                </div>
            </div>

            <!-- image -->
            <div class="flex justify-start md:w-1/2 px-10">
                <img class="rounded-lg max-h-100 w-full object-cover object-left" src="sate.png" alt="About Us" />
            </div>
        </div>
    </div>


    <!-- best seller section -->
    <div id="bests" class=" flex flex-col items-center justify-center bg-zinc-900 h-[550px] overflow-hidden space-y-10">
        <a class=" text-white font-eb-garamond text-6xl">Our Best Sellers</a>
        <div class="group saturate-0 hover:saturate-100 swiper swiper-container">
            <div class="swiper-wrapper py-5">
                <div class="swiper-slide">
                    <div class="flex space-x-0 md:space-x-16 sm:space-x-8 items-center justify-center">
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav1.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav2.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav3.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav4.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav5.png" />
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="flex space-x-0 md:space-x-16 sm:space-x-8 items-center justify-center">
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav1.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav2.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav3.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav4.png" />
                        <img class="h-28 sm:w-30 sm:h-30 md:w-40 md:h-40" src="fav5.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center w-full">
            <div class="bg-yellow-100 hover:bg-yellow-200 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                <a href="#" target="_blank" class="block py-3 px-8 text-center text-l font-medium text-zinc-900">
                    See all
                </a>
            </div>
        </div>
    </div>

    <!-- maps section -->
    <!-- <div id="maps" class=" flex bg-yellow-100 h-screen">
        <div class=" flex items-center justify-center">
            <div class="card-detail px-10 py-10">
                <div class="top font-eb-garamond text-7xl py-10 md:py-0">
                    The Adventure <br>
                    Awaits!!</div>

                <div class="middle py-10 md:py-10 text-l">
                Don't wait any longer! 
                Experience the deliciousness of our restaurant's food. From the tasty dishes to a cozy atmosphere, we're ready to pamper your taste buds. 
                <br> <br>
                Find joy in every bite and enjoy an unforgettable dining experience with us.
                <br>
                Come on, visit our restaurant today and make your evening special!
                </div>

                <div class="flex w-full">
                    <div class="bg-zinc-900 hover:bg-zinc-700 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                        <a href="https://maps.app.goo.gl/CdnZNXiA3os8Mn3v8" target="_blank" class="block py-3 px-8 text-center text-l font-medium text-white">
                            Take a look at maps !
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-full">
            <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.484991105166!2d106.827183!3d-6.175392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6e7e71f6e43%3A0x2e2f5e7a69b5b745!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1648483010939!5m2!1sen!2sus"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </div> -->

    <div id="maps" class="bg-yellow-100 h-full md:py-20 opacity-0 transition-opacity ease-in-out duration-1000 fade-section">
        <div class="card flex flex-col sm:flex-columns-reverse md:flex-row sm:px-10 py-10 md:space-x-10">
            
            <!-- details -->
            <div class="card-detail text-zinc-900 md:w-1/2 px-10 sm:px-0">
                <div class="top font-eb-garamond text-4xl sm:text-5xl md:text-7xl py-10 md:py-0">The adventure awaits!!</div>
                <div class="middle pt-10 md:py-10 text-base sm:text-lg md:text-xl">
                    Don't wait any longer! 
                    Experience the deliciousness of our restaurant's food. From the tasty dishes to a cozy atmosphere, we're ready to pamper your taste buds. 
                    <br> <br>
                    Find joy in every bite and enjoy an unforgettable dining experience with us.
                    <br>
                    Come on, visit our restaurant today and make your evening special!
                </div>
                <div class="flex w-full py-10">
                    <div class="bg-zinc-900 hover:bg-zinc-700 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                        <a href="https://maps.app.goo.gl/CdnZNXiA3os8Mn3v8" target="_blank" class="block py-3 px-8 text-center text-l font-medium text-white">
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
        <p class=" text-white">Visit our <strong>Instagram</strong> page to look around <br>or <strong>Message</strong> us to book a table for your special occasion. </p>
        
        <div class="flex space-x-5 opacity-90">
            <div class="flex">
                <div class="text-white py-2 px-4 flex items-center bg-none border-white border-2 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                    <img src="{{ asset('ig.svg') }}" alt="">
                    <a href="https://instagram.com/resto.rasasulawesi" target="_blank" class="block px-3 text-center text-l font-medium">
                        Our Instagram
                    </a>
                </div>
            </div>
            <div class="flex">
                <div class="text-white py-2 px-4 flex items-center bg-none border-white border-2 rounded-full transition ease-in-out delay-100 hover:scale-110 duration-200">
                    <img src="{{ asset('wa.svg') }}" alt="">
                    <a href="https://wa.me/081371111849" target="_blank" class="block px-3 text-center text-l font-medium">
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

    <!-- navbar config -->
    <script>
        // swiper
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('navbar-sticky');
            menu.classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            freeMode: true,
            speed: 5000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            slidesPerView: 'auto',
            spaceBetween: 10,
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

        // SCROLLING ANIMATION can ignore for now

        // const html = document.documentElement;
        // const canvas = document.getElementById("ornament");
        // const context = canvas.getContext("2d");
        // const frameCount = 41;
        // const currentFrame = index => (
        //     `https://raw.githubusercontent.com/ooowwwiiilll/ornaments/main/or
        //     ${index.toString().padStart(2, '0')}.png`
        // )
        // const preloadImages = () => {
        //     for (let i = 1; i < frameCount; i++) {
        //         const img = new Image()
        //         img.onload = () => {
        //         console.log(`Image ${i} loaded`);
        //         };
        //         img.src = currentFrame(i);
        //     }
        // };

        // const img = new Image()
        // img.onload = function() {
        //     canvas.width = img.width;
        //     canvas.height = img.height;
        // context.drawImage(img, 0, 0);
        // };
        // img.src = currentFrame(1);

        // const updateImage = index => {
        //     img.src = currentFrame(index);
        //     context.drawImage(img, 0, 0);
        // }

        // window.addEventListener('scroll', () => {  
        //     const scrollTop = html.scrollTop;
        //     const maxScrollTop = html.scrollHeight - window.innerHeight;
        //     const scrollFraction = scrollTop / maxScrollTop;
        //     const frameIndex = Math.min(
        //         frameCount - 1,
        //         Math.ceil(scrollFraction * frameCount)
        //     );
            
        //     requestAnimationFrame(() => updateImage(frameIndex + 1))
        // });

        // preloadImages()

    </script>
    
</body>
</html>