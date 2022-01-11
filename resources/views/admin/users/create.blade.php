<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SIMONEV-PPG | Users') }}
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
                              <h3 class="text-lg font-medium leading-6 text-gray-900">Adding User</h3>
                              <p class="mt-1 text-sm text-gray-600">
                                Add users with correct information only.
                              </p>
                            </div>
                          </div>
                          <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('users.store') }}" method="post">
                                @csrf
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-gray-100 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="name" id="name" 
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('name') is-invalid @enderror"  value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="email" class="block text-sm font-medium text-gray-700">E-Mail</label>
                                                <input type="text" name="email" id="email"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('email') is-invalid @enderror"  value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                                <input type="text" name="password" id="password"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('password') is-invalid @enderror">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                            
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                                <select id="role" name="role" autocomplete="role-name" 
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm
                                                @error('password') is-invalid @enderror"  value="{{ old('role') }}">
                                                    @foreach ($roles as $role)
                                                        <option name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}">{{ $role->name }}</option>
                                                    @endforeach
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                    @enderror
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Add User
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
