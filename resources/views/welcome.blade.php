<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Úvod
        </h2>
    </x-slot>
       
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex gap-2 items-center justify-center flex-wrap max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                    <a
                        href="{{ route('task1') }}"
                        class="block p-6 rounded-2xl bg-blue-600 text-white text-center shadow-md hover:bg-blue-700 transition w-full sm:w-auto min-w-[150px]"
                    >
                        <h2 class="text-xl font-semibold">Úkol 1</h2>
                    </a>
                
                    <a
                        href="{{ route('task2') }}"
                        class="block p-6 rounded-2xl bg-blue-600 text-white text-center shadow-md hover:bg-blue-700 transition w-full sm:w-auto min-w-[150px]"
                    >
                        <h2 class="text-xl font-semibold">Úkol 2</h2>
                    </a>
            </main>
        </div>
</x-guest-layout>
