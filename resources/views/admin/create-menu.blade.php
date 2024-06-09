<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <x-modal focusable name="alert" show="True">
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <span class="font-medium">Success!</span> {{ session('success') }}
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                        <div class="flex justify-end mr-4">
                            <button type="button" x-on:click.prevent="$dispatch('close-modal', 'alert')"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Close
                            </button>
                        </div>
                    </div>
                </x-modal>
            @endif
            @if ($errors->any())
                <x-modal focusable name="alert" show="True">

                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        @foreach ($errors->all() as $error)
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">Error!</span> {{ $error }}
                            </div>
                        @endforeach
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                        <div class="flex justify-end mr-4">
                            <button type="button" x-on:click.prevent="$dispatch('close-modal', 'alert')"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Close
                            </button>
                        </div>
                    </div>
                </x-modal>

            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="flex justify-end my-2 mx-4">
                    <button type="button" x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'create_menu')"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                        Menu</button>
                </div>
                <x-modal name="create_menu" focusable>
                    <form method="POST" enctype="multipart/form-data" id="create_menu">
                        @csrf
                        <div class="space-y-12 p-8">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Create New Menu</h2>
                                <hr />
                                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="Name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="name" id="name"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    value="{{ old('name') }}"
                                                    placeholder="Burger">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="Price"
                                            class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="price" id="price"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    value="{{ old('price') }}"
                                                    placeholder="Rp.20.000">
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
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                            a
                                            category</label>
                                        <select id="category_id" name="category_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-full">
                                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">
                                            photo</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="flex text-sm leading-6 text-gray-600">
                                                    <label for="image_path"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="image_path" name="image_path" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-x-6 px-8 pb-4">
                            <button type="button" x-on:click.prevent="$dispatch('close-modal', 'create_menu')"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </x-modal>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-16 py-3">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Desc
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        @foreach ($menus as $menu)
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4">
                                        <img src="{{ asset('storage/' . $menu->image_path) }}"
                                            alt="{{ $menu->name }}" class="w-16 md:w-32 max-w-full max-h-full"
                                            alt="Apple Watch">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $menu->name }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $menu->description }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $menu->price }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $menu->category->name }}
                                    </td>
                                    <td>
                                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                            type="button" x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'edit_menu_{{ $menu->id }}')">Edit</button>

                                        <form method="post" action="menu/delete/{{ $menu->id }}"
                                            onsubmit="return confirm('Do You want to delete {{ $menu->name }} from the menu')">
                                            @csrf
                                            @method('delete')
                                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                </tr>
                            </tbody>

                            <x-modal name="edit_menu_{{ $menu->id }}" focusable>
                                <form method="POST" enctype="multipart/form-data" id="edit_menu_{{ $menu->id }}" action="{{ url('/menu/update/' . $menu->id) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="space-y-12 p-8">
                                        <div class="border-b border-gray-900/10 pb-12">
                                            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit
                                                {{ $menu->name }}</h2>
                                            <hr />
                                            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="sm:col-span-4">
                                                    <label for="Name"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                                    <div class="mt-2">
                                                        <div
                                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                            <input type="text" name="name" id="name"
                                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                placeholder="Burger" value="{{ $menu->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-4">
                                                    <label for="Price"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                                    <div class="mt-2">
                                                        <div
                                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
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
                                                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a category</label>
                                                    <select id="category_id" name="category_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ (old('category_id') ?? $menu->category_id) == $category->id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-span-full ">
                                                    <!-- EDIT IMAGE -->
                                                    
                                                    <label for="image_path"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Menu
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
