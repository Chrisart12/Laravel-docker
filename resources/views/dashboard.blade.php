<x-app-layout>
    <x-slot:title>
        Home
    </x-slot>
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
                <x-test>
                    <x-slot:toto>J'ai 45 ans</x-slot>
                    <x-slot:tata>Je sui à la maison</x-slot>
                </x-test>
            </div>
        </div>
    </div>
</x-app-layout>
