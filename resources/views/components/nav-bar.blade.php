<style>
    .active {
        color: #FEF9C3;
        font-weight: bold; 
    }
</style>
<nav id="home" class="bg-emerald-950/80 backdrop-blur-md fixed w-full z-20 top-0 start-0 border-b border-emerald-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        
        <!-- logo -->
        <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
            <img src="{{asset('storage/images/favicon.png') }}" class="h-8" alt="Rasul Icon">
            <img src="{{asset('storage/images/rasulicon.png') }}" class="h-8" alt="Rasul Icon">
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
                    <a href="/" data-scroll="home" class="block py-2 px-3 text-white hover:text-yellow-100  md:p-0 {{ Request::is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="/menus" class="block py-2 px-3 text-white hover:text-yellow-100 md:hover:text-yellow-100 md:p-0 {{ Request::is('menus') ? 'active' : '' }}">Menus</a>
                </li>
                <li>
                    <a href="/" data-scroll="maps" class="block py-2 px-3 text-white hover:text-yellow-100 md:hover:text-yellow-100 md:p-0 {{ Request::is('maps') ? 'active' : '' }}">Location</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

