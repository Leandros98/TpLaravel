@extends('admin.admin')
<x-slot name="header">
    <h1>@yield('title')</h1>
</x-slot>

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8 w-80%">
        <div class="flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800 dark:text-white">
            </a>
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a   href="{{route('admin.index')}}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Home
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Se connecter
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                S'inscrire
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="mt-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white">
                Bienvenue dans notre Agence Immobilière
            </h1>
        </div>
        <div class="mt-10">
            <p class="text-gray-800 dark:text-white text-lg md:text-xl font-medium leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam placeat laudantium eligendi voluptatem, eveniet quo, totam error recusandae rem saepe ab? Consequatur, quam at odio distinctio molestiae provident laudantium autem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aut et sapiente. Eligendi facilis aspernatur, sapiente sunt quibusdam veritatis. Sapiente voluptatum vitae libero. Debitis nostrum quos architecto similique, incidunt id.
            </p>
        </div>

        <div class="mt-10">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Nos services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-80%">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Achat</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Nous vous accompagnons dans votre projet d'achat immobilier.
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-80%">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Location</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Nous vous proposons une sélection de biens à la location.
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-80%">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Gestion Locative</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Nous nous occupons de la gestion de votre bien en location.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>