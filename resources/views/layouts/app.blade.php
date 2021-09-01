<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TechnoTimes</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
      
        <div class="min-h-screen bg-gray-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 ">
            <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/home')  }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                    <a class="navbar-brand text-primary" href="{{ url('/home')  }}">TechnoTimes</a>
             </div>



             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="{{ url('/home') }}">Home<span class="sr-only">(current)</span></a>
                    </li>
                    @if(Route('login'))
                        @auth
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('article') }}">Add An Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary disabled" href="#">Edit My Articles</a>
                    </li>
                        @endauth
                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-primary disabled" href="#">About us</a>
                    </li>

                </ul>
            </div>
            <div class="ml-3 relative">
                @if(Route('login'))
                        @auth
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">

                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-primary bg-white hover:text-gray-700 focus:outline-none transition">
                                        Profile

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>

                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>
                            <div class="border-t border-gray-100"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endauth
                    @endif
                </div>
        </nav>
            <!-- Page Content -->
            <main>
                 @yield('content')
            </main>
        

        @stack('modals')

        @livewireScripts
    </body>
</html>
