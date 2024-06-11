<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Succes Pop Up --}}
            @if (session('success'))
                <x-modal focusable name="alert" show="True">
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                            role="alert">
                            <span class="font-medium">Success!</span> {{ session('success') }}
                        </div>
                        <p class="mb-3 font-normal text-gray-700"></p>
                        <div class="flex justify-end mr-4">
                            <button type="button" x-on:click.prevent="$dispatch('close-modal', 'alert')"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Close
                            </button>
                        </div>
                    </div>
                </x-modal>
            @endif

            {{-- Validation Error Pop Up --}}
            @if ($errors->any())
                <x-modal focusable name="alert" show="True">
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                        @foreach ($errors->all() as $error)
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                role="alert">
                                <span class="font-medium">Error!</span> {{ $error }}
                            </div>
                        @endforeach
                        <p class="mb-3 font-normal text-gray-700"></p>
                        <div class="flex justify-end mr-4">
                            <button type="button" x-on:click.prevent="$dispatch('close-modal', 'alert')"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Close
                            </button>
                        </div>
                    </div>
                </x-modal>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                {{-- Search  --}}
                <div class="flex justify-between items-center my-2 mx-4">
                    <form action="/admin/menu">
                        <label for="search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="search" type="text" name="search"
                                value="{{ request('search') }}"
                                class="block sm:w-[300px] w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search..." />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>

                    {{-- Crreate Menu Button --}}
                    <div>
                        <button type="button" x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'create_menu')"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Create
                            Menu</button>
                    </div>
                </div>

                {{-- Create New Menu Modal --}}
                <x-modal name="create_menu" focusable>
                    <form method="POST" enctype="multipart/form-data" id="create_menu">
                        @csrf
                        <div class="space-y-12 p-8">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Create New Menu</h2>
                                <hr />
                                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="col-span-full">
                                        <label for="name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                        <div class="mt-2 ">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                                                <input type="text" name="name" id="name"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    value="{{ old('name') }}" placeholder="Burger">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-full">
                                        <label for="price"
                                            class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                                                <input type="text" name="price" id="price"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    value="{{ old('price') }}" placeholder="Rp.20.000">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="description"
                                            class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                        <div class="mt-2">
                                            <textarea id="description" name="description" rows="3"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-span-full">
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900">Select
                                            a
                                            category</label>
                                        <select id="category_id" name="category_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                     <!-- Edit Image Button -->
                                    <div class="col-span-full">
                                        <label for="image_path"
                                            class="block mb-2 text-sm font-medium text-gray-900">Menu
                                            Image</label>
                                        <input id="image_path" name="image_path" type="file" class="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Save & Cancel Button --}}
                        <div class="flex items-center justify-end gap-x-6 px-8 pb-4">
                            <button type="button" x-on:click.prevent="$dispatch('close-modal', 'create_menu')"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </x-modal>

                {{-- Table --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-16 py-3">Image</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Desc</th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>

                        {{-- Show Each Menu --}}
                        @foreach ($menus as $menu)
                            <tbody>
                                <tr
                                    class="bg-white border-b hover:bg-gray-50">
                                    <td class="p-4">
                                        <img src="{{ asset('storage/' . $menu->image_path) }}"
                                            alt="{{ $menu->name }}" class="w-16 md:w-32 max-w-full max-h-full">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $menu->name }}</td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $menu->description }}</td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $menu->price }}</td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $menu->category->name }}</td>
                                    <td>
                                        {{-- Edit Button --}}
                                        <button class="font-medium text-blue-600 hover:underline"
                                            type="button" x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'edit_menu_{{ $menu->id }}')">Edit</button> <br />

                                        {{-- Delete Button --}}
                                        <button class="font-medium text-red-600 hover:underline"
                                            type="button" x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'delete_menu_{{ $menu->id }}')">Delete</button>
                                    </td>
                                </tr>
                            </tbody>

                            <!-- Edit Modal -->
                            <x-modal name="edit_menu_{{ $menu->id }}" focusable>
                                <form method="POST" enctype="multipart/form-data"
                                    id="edit_menu_{{ $menu->id }}"
                                    action="{{ url('admin/menu/update/' . $menu->id) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="space-y-12 p-8">
                                        <div class="border-b border-gray-900/10 pb-12">
                                            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit
                                                {{ $menu->name }}</h2>
                                            <hr />
                                            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="col-span-full">
                                                    <label for="Name"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                                    <div class="mt-2">
                                                        <div
                                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                                            <input type="text" name="name" id="name"
                                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                placeholder="Burger" value="{{ $menu->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-full">
                                                    <label for="Price"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                                    <div class="mt-2">
                                                        <div
                                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                                            <input type="text" name="price" id="price"
                                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                placeholder="IDR XXXXXX" value="{{ $menu->price }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-full">
                                                    <label for="description"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                                    <div class="mt-2">
                                                        <textarea id="description" name="description" rows="3"
                                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $menu->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-span-full">
                                                    <label for="category_id"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Select
                                                        a category</label>
                                                    <select id="category_id" name="category_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ (old('category_id') ?? $menu->category_id) == $category->id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-span-full">
                                                    <label for="image_path"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Menu
                                                        Image</label>
                                                    <input id="image_path" name="image_path" type="file"
                                                        class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end gap-x-6 px-8 pb-4">
                                        <button type="button"
                                            x-on:click.prevent="$dispatch('close-modal', 'edit_menu_{{ $menu->id }}')"
                                            class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                        <button type="submit"
                                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                    </div>
                                </form>
                            </x-modal>
                        @endforeach
                    </table>

                    {{-- Pagination --}}
                    <div class="p-4">
                        {{ $menus->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
