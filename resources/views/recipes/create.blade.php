<x-app-layout>
    <x-slot:title>
        Create | recipes
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une nouvelle recette') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Créer votre nouvelle recette
                </div>
                <form action="{{ route('recipes.store') }}" method="post">
                    @csrf
                    <div class="mb-10">
                        <x-label value="Titre de la recette" for="title"></x-label>
                        <x-input type="text" name="title" id="title"></x-input>
                    </div>
                    @foreach ($ingredients as $ingredient)
                        <div class="my-5" x-data="{isEnabled: false}">
                            <div class="mb-3">
                                <x-label value="{{ $ingredient->name }}" for="{{ $ingredient->id }}"></x-label>
                                <x-input type="checkbox" name="tt" id="{{ $ingredient->id }}" x-model="isEnabled"></x-input>
                            </div>

                            <div class="mb-2">
                                <x-input name="ingredients[{{ $ingredient->id }}][amount]" class="shadow 
                                    appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight 
                                    focus:outline-none focus:shadow-outline" x-bind:disabled="!isEnabled"></x-input>
                            </div>
                            <div class="mb-2">
                                <x-input name="ingredients[{{ $ingredient->id }}][unit]" class="shadow 
                                    appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight 
                                    focus:outline-none focus:shadow-outline" x-bind:disabled="!isEnabled"></x-input>
                            </div>
                        </div>
                    @endforeach

                    <div class="mb-2">
                        <x-button type="submit">Créer ma recette</x-button>
                    </div>


                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>