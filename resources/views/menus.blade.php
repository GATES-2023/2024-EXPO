<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Rasa Sulawesi Menus</title>
    <link rel="icon" type="image/x-icon" href="storage\images\icon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="{{ asset('storage/images/faviconGR.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;700&display=swap');

        .font-eb-garamond {
            font-family: 'EB Garamond', serif;
        }
    </style>
</head>

<body>

    <x-nav-bar />

    <div class="relative bg-emerald-950">
        <div class="pt-40 text-white ">
            <div class="text-center">
                <p class="md:text-6xl sm:text-4xl text-3xl font-eb-garamond">
                    Certified good foods!
                </p>
                <p class="m-8 font-light">Here are the complete list of the foods we serve.
                    <br />Which one is your favorite?
                </p>
            </div>
    
            {{-- Filter --}}
    
            <div class="flex mx-16 sm:mx-28 border-b-2 border-white/40 text-gray-400">
                <div id="category-buttons" class="text-sm font-extralight">
                    <button class="category-btn mx-2 border-b-4 border-transparent font-bold text-white" data-url="{{ route('menus') }}">All</button>
                    @foreach($categories as $category)
                        <button class="category-btn mx-2 border-b-4 border-transparent" data-url="{{ route('menus.filter', $category->id) }}">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>
            </div>
    
            {{-- Menu Card --}}
    
            <div id="menu-list" class="pb-8">
                @include('partials.menu-list', ['menus' => $menus])
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('navbar-sticky');
            menu.classList.toggle('hidden');
        });
    
        $(document).ready(function() {
            $('.category-btn').click(function() {
                var url = $(this).data('url');
                $('.category-btn').removeClass('font-bold text-white');  // Remove styling from all buttons
                $(this).addClass('font-bold text-white');  // Add styling to the clicked button
    
                $.get(url, function(data) {
                    $('#menu-list').html(data);
                });
            });
    
            // Trigger click event on "All" button by default
            $('.category-btn[data-url="{{ route('menus') }}"]').click();
        });
    </script>
    
</body>

</html>
