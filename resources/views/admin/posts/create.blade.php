<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SIMONEV-PPG | Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                          <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                              <h3 class="text-lg font-medium leading-6 text-gray-900">Adding Questionnaire</h3>
                              <p class="mt-1 text-sm text-gray-600">
                                Create questionnaire with interesting title.
                              </p>
                            </div>
                          </div>
                          <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('post.store') }}" method="post">
                                @csrf
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-gray-100 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                                <input type="text" name="title" id="title" 
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('title') is-invalid @enderror"  value="{{ old('title') }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                                                <input type="text" name="slug" id="slug"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('slug') is-invalid @enderror"  value="{{ old('slug') }}">
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                                <select id="category" name="category" autocomplete="category-name" 
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm
                                                @error('password') is-invalid @enderror"  value="{{ old('category') }}">
                                                    <option value="-">-</option>
                                                    @foreach ($categories as $category)
                                                        <option name="categorys[]" value="{{ $category->id }}" id="{{ $category->name }}" >{{ $category->name }}</option>
                                                    @endforeach
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                    @enderror
                                                </select>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                                <input type="text" name="image" id="image"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('image') is-invalid @enderror"  value="{{ old('image') }}">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                                                <input type="text" name="body" id="body"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('body') is-invalid @enderror"  value="{{ old('body') }}">
                                                @error('body')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Add Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
