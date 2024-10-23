<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:avatar-usuario />
                </div>
            </div> --}}

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:criar-usuario />
                </div>
            </div>



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:lista-de-usuario />
                </div>
            </div>

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:count />
                </div>
            </div> --}}

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  mt-8">
                <div class="p-6 text-gray-900">
                    <livewire:todo />
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
