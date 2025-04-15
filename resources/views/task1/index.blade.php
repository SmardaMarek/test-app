<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Úkol 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/task1.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-black">
    <!-- Header Section -->
    <header class="bg-gray-900 bg-opacity-90 border-b sticky top-0 py-3 z-50 backdrop-blur border-b border-gray-800">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center px-4">
            <h1 class="text-white text-lg">
                <a href="#" class="text-white text-decoration-none font-bold">logo</a>
            </h1>
    
            <nav class="flex flex-grow justify-center space-x-6">
                <a href="#about" class="text-white text-decoration-none">O nás</a>
                <a href="#article" class="text-white text-decoration-none">Články</a>
                <a href="#contact" class="text-white text-decoration-none">Kontakt</a>
                <a href="#about" class="text-white text-decoration-none">O nás</a>
                <a href="#article" class="text-white text-decoration-none">Články</a>
                <a href="#contact" class="text-white text-decoration-none">Kontakt</a>
                <a href="#about" class="text-white text-decoration-none">O nás</a>
            </nav>
    
            <h1 class="text-white text-lg">
                <a href="#" class="text-white text-decoration-none"><i class="fas fa-comments"></i>
                    Zeptej se
                </a>
            </h1>
        </div>
    </header>
    
<!-- Greetings Section -->
<section class="relative h-screen bg-black text-white flex flex-col items-center justify-center text-center px-4">
    <video autoplay loop muted class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('videos/main.mp4') }}" type="video/mp4">
        Váš prohlížeč nepodporuje video tag.
    </video>
    
    <div class="relative z-10">
        <h1 id="rotatingText" class="text-5xl md:text-7xl font-bold tracking-tight transition-opacity duration-500">
            Vypracování úkolu 1
        </h1>
        
        <a href="#article"
            id="scrollToArticle"
            class="mt-10 inline-flex text-4xl items-center justify-center w-16 h-16 bg-white text-black rounded-full hover:bg-gray-200 transition">
            ↓
        </a>
        
    </div>
</section>

<!-- Articles Section -->
<section id="article" class="py-20 max-w-7xl mx-auto">
    <div class="flex justify-between">
        <div class="w-full text-xl">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla pulvinar eleifend sem. Pellentesque ipsum. Mauris dolor felis, sagittis at, 
                luctus sed, aliquam non, tellus. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo.
                    Quisque porta. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, 
                    est. Phasellus faucibus molestie nisl. Nullam at arcu a est sollicitudin euismod. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. 
                    Aliquam erat volutpat. Etiam posuere lacus quis dolor. Morbi scelerisque luctus velit. Curabitur vitae diam non enim vestibulum interdum. 
                    Proin in tellus sit amet nibh dignissim sagittis.
            </p>
        </div>
    </div>
        
        <div class="grid grid-cols-3 gap-4 mt-4">
        <div>
            <div class="text-2xl py-2 text-purple-500">Sloupec 1</div>
            <p>
            Fusce consectetuer risus a nunc. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias 
            consequatur aut perferendis doloribus asperiores repellat.
            </p>
        </div>
        <div>
            <div class="text-2xl py-2 text-purple-500">Sloupec 2</div>
            <p> 
            Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Sed elit dui, pellentesque a, 
            faucibus vel, interdum nec, diam. Fusce wisi.
            </p>
        </div>
        <div>
            <div class="text-2xl py-2 text-purple-500">Sloupec 3</div>
            <p>
            Pellentesque ipsum. In rutrum. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Nunc dapibus tortor vel mi 
            dapibus sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </p>
        </div>
        </div>
</section>

<!-- Banners Section -->
<section id="banners" class="mx-auto relative overflow-hidden">
    <div class="grid grid-cols-2">
        <div class="flex flex-col">
            <img src="{{ asset('images/big1.webp') }}" alt="picture 1" class="w-full h-98 object-cover" 
            data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-once="true" data-title="Obrázek 1" loading="lazy">
            <div class="grid grid-cols-2">
                <img src="{{ asset('images/small1.webp') }}" alt="picture 2" class="w-full h-50 object-cover" 
                data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-once="true" data-title="Obrázek 2" loading="lazy">
                <img src="{{ asset('images/small2.webp') }}" alt="picture 3" class="w-full h-50 object-cover" 
                data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-once="true" data-title="Obrázek 3" loading="lazy">
            </div>
        </div>

        <div class="flex flex-col">
            <div class="grid grid-cols-2">
                <img src="{{ asset('images/small3.webp') }}" alt="picture 4" class="w-full h-50 object-cover" 
                data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-once="true" data-title="Obrázek 4" loading="lazy">
                <img src="{{ asset('images/small4.webp') }}" alt="picture 5" class="w-full h-50 object-cover" 
                data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-once="true" data-title="Obrázek 5" loading="lazy">
            </div>
            <img src="{{ asset('images/big2.webp') }}" alt="picture 6" class="w-full h-98 object-cover" 
            data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000" data-aos-once="true" data-title="Obrázek 6" loading="lazy">
        </div>
    </div>
    <div id="bubble" class="p-4 bg-purple-500 rounded-full absolute pointer-events-none hidden text-white ">
        <span id="bubble-text"></span>
    </div>
</section>
    

<!-- Count section -->
<section class="bg-black text-white text-center py-20 px-6">
    <div class="grid grid-cols-2 border-b border-gray-800 text-left max-w-7xl mx-auto">
        <div class="flex flex-col">
            <div class="text-6xl py-12 text-white">Lorem ipsum dolor</div>
        </div>

        <div class="flex flex-col">
            <div class="text-3xl py-12 text-white">"Nullam lectus justo, vulputate eget mollis sed, tempor sed magna."
            </div>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-4 text-left max-w-7xl mx-auto">
        <div>
            <div class="text-6xl py-10 text-purple-500 font-bold" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">1</div>
            <div class="text-3xl text-white">Lorem ipsum dolor</div>
        </div>
        <div>
            <div class="text-6xl py-10 text-purple-500 font-bold" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">2</div>
            <div class="text-3xl text-white">Lorem ipsum dolor</div>
        </div>
        <div>
            <div class="text-6xl py-10 text-purple-500 font-bold" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">3</div>
            <div class="text-3xl text-white">Lorem ipsum dolor</div>
        </div>
        <div>
            <div class="text-6xl py-10 text-purple-500 font-bold" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">4</div>
            <div class="text-3xl text-white">Lorem ipsum dolor</div>
        </div>
        </div>
</section>

<!-- Products Section -->
<section class="py-8 w-full flex justify-end relative" id="products">
    <div class="px-4 w-full">
        <div class="w-full flex justify-between">
            <div class="text-4xl font-semibold mb-6 ml-4">Produkty</div>
            <div class="rounded-[150px] bg-purple-500 text-white p-4 w-[150px] text-center">Přejít do blogu</div>
        </div>

        <!-- Carousel wrapper -->
        <div class="relative" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">
            <!-- Scrollable area -->
            <div class="overflow-x-auto cursor-grab active:cursor-grabbing" id="carousel-wrapper">
                <div class="flex transition-transform duration-500 ease-in-out" id="product-carousel">
                    <!-- Produkt 1 -->
                    <div class="w-[450px] p-4 shrink-0">
                        <img src="{{ asset('images/product1.webp') }}" alt="Produkt 1" class="w-full h-[500px] object-cover">
                        <div class="py-1">{{ date('d.m.Y') }}</div>
                        <h3 class="text-3xl font-semibold">Produkt 1</h3>
                        <p class="text-gray-600 mt-2">Popis produktu 1</p>
                    </div>

                    <!-- Produkt 2 -->
                    <div class="w-[450px] p-4 shrink-0">
                        <img src="{{ asset('images/product2.webp') }}" alt="Produkt 2" class="w-full h-[500px] object-cover">
                        <div class="py-1">{{ date('d.m.Y') }}</div>
                        <h3 class="text-3xl font-semibold">Produkt 2</h3>
                        <p class="text-gray-600 mt-2">Popis produktu 2</p>
                    </div>

                    <!-- Produkt 3 -->
                    <div class="w-[450px] p-4 shrink-0">
                        <img src="{{ asset('images/product3.webp') }}" alt="Produkt 3" class="w-full h-[500px] object-cover">
                        <div class="py-1">{{ date('d.m.Y') }}</div>
                        <h3 class="text-3xl font-semibold">Produkt 3</h3>
                        <p class="text-gray-600 mt-2">Popis produktu 3</p>
                    </div>

                    <!-- Produkt 4 -->
                    <div class="w-[450px] p-4 shrink-0">
                        <img src="{{ asset('images/product4.webp') }}" alt="Produkt 4" class="w-full h-[500px] object-cover">
                        <div class="py-1">{{ date('d.m.Y') }}</div>
                        <h3 class="text-3xl font-semibold">Produkt 4</h3>
                        <p class="text-gray-600 mt-2">Popis produktu 4</p>
                    </div>

                    <div class="w-[450px] p-4 shrink-0">
                        <img src="{{ asset('images/big2.webp') }}" alt="Produkt 5" class="w-full h-[500px] object-cover" loading="lazy">
                        <div class="py-1">{{ date('d.m.Y') }}</div>
                        <h3 class="text-3xl font-semibold">Produkt 5</h3>
                        <p class="text-gray-600 mt-2">Popis produktu 5</p>
                    </div>
                </div>
            </div>

            <!-- Navigation + Page Indicator -->
            <div class="mt-2 flex items-center justify-start gap-4">
                <button onclick="moveCarousel(-1)" class="text-black p-2">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div id="carousel-page" class="text-sm text-gray-700">1 / 2</div>
                <button onclick="moveCarousel(1)" class="text-black p-2">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
        </div>
    </div>
    <div id="bubble-2" class="p-4 bg-purple-500 rounded-full absolute pointer-events-none hidden text-white ">
        <i class="fa-solid fa-plus"></i>
    </div>
    
</section>
    
<!-- Bottom Section -->
<section id="slide" class="w-full bg-gray-900">
    <!-- Secondary video Section -->
    <section id="secondary-video">
        <!-- Video zobrazené na stránce -->
        <div class="relative z-20">
            <video id="videoPlayerThumbnail" class="w-full mx-auto block" poster="{{ asset('videos/secondary.mp4') }}">
                <source src="{{ asset('videos/secondary.mp4') }}" type="video/mp4">
                Váš prohlížeč nepodporuje přehrávání videa.
            </video>
            
            <!-- Tlačítko pro přehrání videa v samostatném okně -->
            <button onclick="openVideoPlayer('videoPlayerThumbnail')" class="absolute inset-0 flex justify-center items-center text-white text-4xl font-semibold">
                <i class="fa fa-play-circle" aria-hidden="true"></i>
            </button>
        </div>
    </section>
    <!-- Footer Section -->
    <footer class="relative bg-gray-900 text-white text-center py-20 px-6 -mt-20 overflow-hidden" data-aos="slide-down" data-aos-delay="200" data-aos-duration="2000">
        <div class="mx-auto text-4xl py-6 mt-4">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
        </div>
        <div class="rounded-[150px] bg-purple-500 text-white p-4 w-[150px] text-center mx-auto py-6 mt-4 mb-4">
            Přejít do blogu
        </div>
        <hr class="border-t border-gray-700 mx-auto w-1/2">
        <div class="grid grid-cols-4 gap-4 mt-4 text-left mx-auto w-1/2">
            <div>
                <div class="text-white text-2xl py-2">Lorem ipsum</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
            </div>
            <div>
                <div class="text-white text-2xl py-2">Lorem ipsum</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
            </div>
            <div>
                <div class="text-white text-2xl py-2">Lorem ipsum</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
            </div>
            <div>
                <div class="text-white text-2xl py-2">Lorem ipsum</div>
                <div class="text-white">Lorem ipsum dolor</div>
                <div class="text-white">Lorem ipsum dolor</div>
            </div>
        </div>
    
        <div class="absolute bottom-4 left-0 right-0 text-center">
            {{ date('d.m.Y') }} - Marek Šmarda
        </div>
    </footer>
</section>
    
</body>

<script src="{{ asset('js/task1.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
    once: false, // obecně umožní opakované animace
    offset: 120,
    duration: 800
});
  </script>
</html>