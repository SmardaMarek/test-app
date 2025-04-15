<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Výpis konkatků') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                            <th class="px-4 py-2">Jméno</th>
                            <th class="px-4 py-2">Příjmení</th>
                            <th class="px-4 py-2">Zpráva</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        @forelse ($contacts as $contact)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $contact->name }}</td>
                                <td class="px-4 py-2">{{ $contact->surname }}</td>
                                <td class="px-4 py-2">{{ $contact->message }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-4 text-center text-gray-500">Žádné kontakty nebyly nalezeny.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
