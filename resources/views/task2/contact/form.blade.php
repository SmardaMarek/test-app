<x-guest-layout>
    <div class="py-12">
        <h2 class="font-semibold text-xl text-black leading-tight flex flex-col sm:justify-center items-center">
            Kontaktní formulář
        </h2>
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow rounded-lg p-6">
                
                @if(session('message'))
                    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                        {{ session('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Jméno</label>
                        <input type="text" name="name" class="mt-1 block w-full border-black-300 rounded-md shadow-sm form-input" value="{{ old('name') }}">
                        @error('name') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="surname" class="block text-sm font-medium text-gray-700">Příjmení</label>
                        <input type="text" name="surname" class="mt-1 block w-full border-black-300 rounded-md shadow-sm form-input" value="{{ old('surname') }}">
                        @error('surname') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Zpráva</label>
                        <textarea name="message" class="mt-1 block w-full border-black-300 rounded-md shadow-sm form-textarea">{{ old('message') }}</textarea>
                        @error('message') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Odeslat
                    </button>
                
                    
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>