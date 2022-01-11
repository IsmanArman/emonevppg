<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/b9cd54ecc3.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
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
                                        <a href="{{ url('/dashboard') }}" class="text-gray-700 dark:text-gray-500 underline"><i class="fas fa-columns"></i> Dashboard</a> 
                                    @else
                                        <a href="{{ route('login') }}" class="text-gray-800"><i class="fas fa-sign-in-alt"></i> Log in</a>
                
                                        {{-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4"><i class="fas fa-file-alt"></i> Register</a>
                                        @endif --}}
                                        @if (Route::has('about'))
                                            <a href="{{ route('about') }}" class="ml-4"><i class="fas fa-info-circle"></i> About</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </header>

            <nav class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 px-4 py-2 hover:bg-gray-700 hover:text-white rounded-md font-semibold">
                                <i class="fas fa-chart-line"></i> INFOGRAPH</a>
                            <a href="#" class="text-gray-400 px-4 py-2 hover:bg-gray-700 hover:text-white rounded-md font-semibold">
                                <i class="fas fa-chalkboard-teacher"></i> PRO-TEACH</a>
                            <a href="#" class="text-gray-400 px-4 py-2 hover:bg-gray-700 hover:text-white rounded-md font-semibold">
                                <i class="fas fa-newspaper"></i> NEWS-UPDATE</a>
                            <a href="#" class="text-gray-400 px-4 py-2 hover:bg-gray-700 hover:text-white rounded-md font-semibold">
                                <i class="fas fa-handshake"></i> CONNECT-US</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="bg-white mt-0">
                <hr>
                <div class="max-w-7xl mx-auto py-6 px-4">
                    <div class="flex item-center justify-between">
                        <div class="flex item-center justify-item-start">
                            <div class="text-gray-500 text-center text-lg">
                                <span>Copyright @ {{ date('Y') }} - Universitas Negeri Yogyakarta</span>
                            </div>
                        </div>
                        <div class="flex text-gray-500 item-center justify-item-center">
                            <a href="https://www.twitter.com/unyofficial" class="ml-2"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="https://www.facebook.com/unyofficial" class="ml-2"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="https://www.instagram.com/unyofficial" class="ml-2"><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
