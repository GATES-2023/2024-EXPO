<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Carousel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Succes Pop Up --}}
                    @if (session('success'))
                        <x-modal focusable name="alert" show="True">
                            <div
                                class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                                    role="alert">
                                    <span class="font-medium">Success!</span> {{ session('success') }}
                                </div>
                                <p class="mb-3 font-normal text-gray-700 "></p>
                                <div class="flex justify-end mr-4">
                                    <button type="button" x-on:click.prevent="$dispatch('close-modal', 'alert')"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </x-modal>
                    @endif

                    {{-- Error Validation Pop Up --}}
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

                    {{-- Create Carousel Button --}}
                    <div class="flex justify-end my-2 mx-4">
                        <button type="button" x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'create_carousel')"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Create
                            Carousel</button>
                    </div>

                    {{-- Create Corusel Modal --}}
                    <x-modal name="create_carousel" focusable>
                        <form method="POST" enctype="multipart/form-data" id="create_carousel">
                            @csrf
                            <div class="space-y-12 p-8">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create Carousel Image
                                    </h2>
                                    <hr />
                                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="col-span-full">
                                            <label for="image_alt"
                                                class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                            <div class="mt-2 ">
                                                <div
                                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                                                    <input type="text" name="image_alt" id="image_alt"
                                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                        value="{{ old('image_alt') }}" placeholder="Burger">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-full">
                                            <label for="order"
                                                class="block text-sm font-medium leading-6 text-gray-900">Order <span
                                                    class="text-gray-300">(Order of images to be shown)</span></label>
                                            <div class="mt-2">
                                                <div
                                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                                                    <input type="number" name="order" id="order" min="1"
                                                        max="10"
                                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                        value="{{ old('order') }}" placeholder="1-10">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <div class="col-span-full ">
                                                <!-- EDIT IMAGE -->

                                                <label for="image_path"
                                                    class="block mb-2 text-sm font-medium text-gray-900">
                                                    Image</label>
                                                <input id="image_path" name="image_path" type="file" class="">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Save & Cancel Button --}}
                            <div class="flex items-center justify-end gap-x-6 px-8 pb-4">
                                <button type="button" x-on:click.prevent="$dispatch('close-modal', 'create_carousel')"
                                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>
                        </form>
                    </x-modal>

                    {{-- Table --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-16 py-3">
                                        <span class="">Image</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Order
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            {{-- Show Each Carousel --}}
                            @foreach ($carousels as $carousel)
                                <tbody>
                                    <tr
                                        class="bg-white border-b hover:bg-gray-50">
                                        <td class="p-4">
                                            <img src="{{ asset('storage/' . $carousel->image_path) }}"
                                                alt="{{ $carousel->name }}" class="w-16 md:w-32 max-w-full max-h-full"
                                                alt="Apple Watch">
                                        </td>
                                        <td class="px-6 py-4 font-semibold text-gray-900">
                                            {{ $carousel->image_alt }}
                                        </td>
                                        <td class="px-6 py-4 font-semibold text-gray-900">
                                            {{ $carousel->order }}
                                        </td>
                                        <td>

                                            {{-- Edit & Delete Button --}}
                                            <button
                                                class="font-medium text-blue-600 hover:underline"
                                                type="button" x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'edit_carousel_{{ $carousel->id }}')">Edit</button><br />


                                            <button class="font-medium text-red-600 hover:underline"
                                                type="button" x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'delete_carousel_{{ $carousel->id }}')">Delete</button>


                                        </td>
                                    </tr>
                                    </tr>
                                </tbody>

                                {{-- Delete Confirmation --}}
                                <x-modal name="delete_carousel_{{ $carousel->id }}" focusable>
                                    <div class="relative p-4 w-full max-w-full max-h-full">
                                        <div class="relative bg-white rounded-lg shadow">
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500">
                                                    Are
                                                    you sure you want to delete <span
                                                        class="font-bold text-black">{{ $carousel->image_alt }}</span></h3>
                                                <form method="post" action="carousel/delete/{{ $carousel->id }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                        Yes, I'm sure
                                                    </button>
                                                </form>
                                                <button type="button"
                                                    x-on:click.prevent="$dispatch('close-modal', 'delete_carousel_{{ $carousel->id }}')"
                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No,
                                                    cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </x-modal>

                                {{-- Edit Modal --}}
                                <x-modal name="edit_carousel_{{ $carousel->id }}" focusable>
                                    <form method="POST" enctype="multipart/form-data"
                                        id="edit_carousel_{{ $carousel->id }}"
                                        action="{{ url('admin/carousel/update/' . $carousel->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <div class="space-y-12 p-8">
                                            <div class="border-b border-gray-900/10 pb-12">
                                                <h2 class="text-base font-semibold leading-7 text-gray-900">Edit
                                                    Carousel Image</h2>
                                                <hr />
                                                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                    <div class="col-span-full">
                                                        <label for="image_alt"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                                        <div class="mt-2 ">
                                                            <div
                                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                                                                <input type="text" name="image_alt" id="image_alt"
                                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                    value="{{ $carousel->image_alt }}"
                                                                    placeholder="Burger">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-full">
                                                        <label for="order"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Order
                                                            <span class="text-gray-300">(Order of images to be
                                                                shown)</span></label>
                                                        <div class="mt-2">
                                                            <div
                                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                                                                <input type="number" name="order" id="order"
                                                                    min="1" max="10"
                                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                    value="{{ $carousel->order }}"
                                                                    placeholder="1-10">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-span-full">
                                                        <div class="col-span-full ">
                                                            <!-- EDIT IMAGE -->

                                                            <label for="image_path"
                                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                                Image</label>
                                                            <input id="image_path" name="image_path" type="file"
                                                                class="">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Save & Cancel Button --}}
                                        <div class="flex items-center justify-end gap-x-6 px-8 pb-4">
                                            <button type="button"
                                                x-on:click.prevent="$dispatch('close-modal', 'edit_carousel_{{ $carousel->id }}')"
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
