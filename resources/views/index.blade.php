<x-main-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <img src="{{ asset('img/uny.png') }}" alt="UNY" width="70">
            <div class="ml-4">
                <h1 class="font-semibold text-xl text-gray-700">
                    {{ __('SIMONEV-PPG') }}
                </h1>
                <span>Sistem Monitoring dan Evaluasi Program Profesional Guru</span>
            </div>
        </div>
        <div class="flex justify-items-end">
            <a href="/">Home</a>
            @if (Route::has('login'))
                <div class="hidden fixed px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </x-slot>
    
</x-main-layout>