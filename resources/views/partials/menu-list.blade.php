<div class="flex items-center justify-center">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 mt-12  mx-16 sm:mx-28">
        @foreach ($menus as $menu)
            <div class="bg-white max-w-[300px]  border border-gray-200 rounded-lg shadow">
                <div class="px-4 pt-4 ">
                    <img class="rounded-md w-[95%] max-h-[250px] mx-auto object-cover"
                        src="{{ asset('storage/' . $menu->image_path) }}" alt="{{ $menu->name }}" />
                </div>
                <div class=" mx-5">
                    <h5 class="text-xl sm:text-2xl font-bold tracking-tight text-gray-900">
                        {{ $menu->name }}</h5>
                    <p class="font-semibold text-gray-700">{{ $menu->price }}</p>

                    <p class="mb-3 text-sm font-normal text-gray-700 text-wrap">{{ $menu->description }}</p>
                </div>
            </div>
        @endforeach
</div>
</div>