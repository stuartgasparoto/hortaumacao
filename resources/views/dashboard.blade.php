<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col items-center gap-4 mb-6">
                        <div class="flex gap-4">
                            <!-- Card 1 -->
                            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                                <h2 class="text-gray-500 font-medium text-sm">Conexão</h2>
                                <p class="text-2xl font-bold">1/1</p>
                                <span class="text-gray-400 text-sm mt-1">HortaIndoor conectado.</span>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                                <h2 class="text-gray-500 font-medium text-sm">Total Messages</h2>
                                <p class="text-2xl font-bold">0/40</p>
                                <span class="text-gray-400 text-sm mt-1">Consumed messages this month.</span>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                                <h2 class="text-gray-500 font-medium text-sm">Informação dos sensores</h2>
                                <p class="text-2xl font-bold">0</p>
                                <span class="text-gray-400 text-sm mt-1">Number of leads captured.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
