
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $service->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow rounded-lg p-6">
                <div class="product-detail">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $service->name }}</h1>
                    <p class="text-gray-700 text-lg mb-6">{{ $service->description }}</p>
                    
                    <a href="{{ route('task2') }}"
                       class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition">
                        ← Zpět na seznam
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
