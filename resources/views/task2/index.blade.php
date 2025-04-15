<x-guest-layout>
    @if (session('message'))
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 3000)" 
            x-show="show"
            class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded transition-opacity duration-500 ease-in-out"
        >
            {{ session('message') }}
        </div>
    @endif
    <body class="bg-white text-black flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="flex bg-white items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col lg:max-w-4xl lg:flex-col gap-6">
                <!-- Proklik do administrace -->
                <div class="w-full text-right">
                    @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-black dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                            >
                                Administrace - Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 text-black border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                            >
                                Administrace - login
                            </a>
                        @endauth
                    </nav>
                @endif
                </div>
    
                <!-- Proklik na kontaktní formulář -->
                <div class="w-full text-right">
                    <a href="{{ route('contact.form') }}" class="inline-block px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md shadow">
                        Kontaktní formulář
                    </a>
                </div>
            
                <!-- Seznam služeb -->
                <div class="bg-white w-full rounded-xl shadow-md p-6">
                    <h1 class="text-2xl font-bold mb-4 text-center">Nabídka služeb</h1>
                    <ul class="space-y-4">
                        @foreach ($services as $service)
                            <li class="border p-4 rounded-lg hover:shadow transition flex flex-col lg:flex-row lg:items-center lg:justify-between">
                                <div>
                                    <h2 class="text-xl font-semibold">{{ $service->name }}</h2>
                                </div>
                                <a href="{{ route('service.show', $service->id) }}" class="mt-3 lg:mt-0 inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                                    Zobrazit detail
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            
            </main>
            
        </div>
        

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</x-guest-layout>
