<x-main-layout>
    {{-- <x-slot name="header">
        <div class="flex justify-between">
            <div class="flex justify-start items-center">
                <img src="{{ asset('img/uny.png') }}" alt="UNY" width="70">
                <div class="ml-4">
                    <h1 class="font-semibold text-xl text-gray-700">
                        {{ __('SIMONEV-PPG') }}
                    </h1>
                    <span>Sistem Monitoring dan Evaluasi Program Profesional Guru</span>
                </div>
            </div>
            <div class="flex justify-end items-center">
                <a href="/"><i class="fas fa-home"></i> Home</a>
                @if (Route::has('login'))
                    <div class="hidden px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-800">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4">Register</a>
                            @endif
                            @if (Route::has('about'))
                                <a href="{{ route('about') }}" class="ml-4">About</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </x-slot> --}}

    <div class="bg-white">
        <div class="max-w-7xl mx-auto flex justify-center items-center">
            <img src="{{ asset('img/home1.jpg') }}" alt="" class="h-auto">
        </div>
    </div>

</x-main-layout>