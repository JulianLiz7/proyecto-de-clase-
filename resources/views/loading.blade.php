<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'E-commerce') }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
    <style>
        /* Modern minimalist animations */
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
    </style>
</head>
<body class="bg-black text-white min-h-screen flex flex-col items-center justify-center p-6 antialiased selection:bg-white/20 overflow-hidden relative font-sans">
    
    <!-- Subtle Background glow effect -->
    <div class="absolute inset-0 z-0 flex justify-center items-center pointer-events-none">
        <div class="w-[500px] h-[500px] bg-white/5 blur-3xl rounded-full"></div>
    </div>

    <!-- Content container -->
    <div class="z-10 text-center max-w-2xl mx-auto flex flex-col items-center">
        <!-- Minimalist Logo/Icon -->
        <div class="opacity-0 animate-fade-in-up mb-12">
            <div class="w-16 h-16 rounded-full border border-white/20 flex items-center justify-center bg-white/5 backdrop-blur-sm transition-transform duration-500 hover:scale-110 cursor-default">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
        </div>
        
        <!-- Typography -->
        <h1 class="opacity-0 animate-fade-in-up delay-100 text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Descubre<br/> <span class="text-white/40">lo extraordinario</span>
        </h1>
        
        <p class="opacity-0 animate-fade-in-up delay-200 text-lg md:text-xl text-gray-400 mb-12 font-light max-w-md">
            Una experiencia de compra diseñada para la simplicidad y la elegancia.
        </p>
        
        <!-- Call to Action -->
        <div class="opacity-0 animate-fade-in-up delay-300">
            <a href="{{ route('product.index') }}" class="group relative inline-flex items-center justify-center px-8 py-4 text-sm font-medium tracking-wide text-black transition-all duration-300 ease-in-out bg-white rounded-full hover:scale-105 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-white">
                Ir a la tienda
                <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</body>
</html>
