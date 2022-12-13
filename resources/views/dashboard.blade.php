<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-8 lg:px-14">
        <a href="{{ route('home') }}"><p>Retour Accueil</p></a>
        @auth
            @if(Auth::user()->admin === 1)
            <a class="px-3" href="{{ route('create') }}"><p>Ajouter un nouveau vetement</p></a>
            <a class="px-3" href="{{ route('createBijouxPret') }}"><p>Ajouter un nouveau bijoux</p></a>
            <a class="px-3" href="{{ route('createBijouxPersonnalisable') }}"><p>Ajouter un nouveau bijoux personnalisable</p></a>
            @else
            <a class="px-3" href="{{ route('homme') }}"><p>Vêtement Homme</p></a>
            <a class="px-3" href="{{ route('femme') }}"><p>Vêtement Femme</p></a>
            <a class="px-3" href="{{ route('enfant') }}"><p>Vêtement Enfant</p></a>
            <a class="px-3" href="{{ route('bijouxPret') }}"><p>Bijoux</p></a>
            <a class="px-3" href="{{ route('bijouxPersonnalisable') }}"><p>Bijoux Personnalisable</p></a>
            @endif
        @endauth
    </div>
</x-app-layout>
