<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SIMONEV-PPG') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-teal-400 border-teal-400 shadow-md rounded-md overflow-hidden text-white">
                    <div class="flex flex-row">
                        <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                            {{-- <img src="{{ asset('img/connect.jpg') }}" alt="User"> --}}
                            <i class="fas fa-user-circle fa-5x"></i>
                        </div>

                        <div class="py-2 ml-10 flex flex-col justify-center">
                            <h1 class="text-xl"> Good day, {{ Auth::user()->name }}</h1>
                            <p class="text-white text-s">Happy to see you again this day.</p>
                        </div>
                    </div>
                </div>  
                <div class="bg-cyan-400 border-cyan-400 shadow-md rounded-md overflow-hidden text-white">
                    <div class="flex flex-row">
                        <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                            {{-- <img src="{{ asset('img/connect.jpg') }}" alt="User"> --}}
                            <i class="fas fa-address-book fa-5x"></i>
                        </div>

                        <div class="py-2 ml-10 flex flex-col justify-center">
                            <h1 class="text-xl">There is - "{{ DB::table('users')->count() }}"</h1>
                            <p class="text-white text-s">Registered users.</p>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    Line Chart
                </div>
                <canvas class="p-6" id="chartLine"></canvas>
            </div>
        </div>
    </div>
</x-app-layout>
