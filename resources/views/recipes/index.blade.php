<x-app-layout>
    <x-slot:title>
        Recipes | Listes
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des recettes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('recipes.create') }}"
                class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">
                Ajouter une recette
            </a>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    Liste des recettes
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>