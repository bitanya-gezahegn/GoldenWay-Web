@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<head>
    <link rel="stylesheet" href="css/home.css">
</head>

<main class="container mx-auto mt-10 px-4">
    <section class="mt-10 text-center section-hero" style="position: relative;">
        <!-- White heading "Why Choose GoldenWay?" at the top -->
        <h3 class="text-2xl font-semibold mb-6 white-heading" style="color: white; position: absolute; top: 20px; left: 50%; transform: translateX(-50%);">
            Why Choose GoldenWay?
        </h3>
        
        <!-- Centered "Explore the world, your way" content -->
        <div class="p-6 rounded-lg shadow-md text-center hero-content">
            <i class="fas fa-ticket-alt text-4xl text-blue-600 mb-4"></i>
            <h4 class="bg-yellow-200 text-4xl font-bold text-white inline-block px-4 py-2 rounded-md centered-heading">
                Explore the world, your way
            </h4>
            <p class="text-white mt-4">Find your perfect adventure with our exclusive offers.</p>
        </div>
        
        <!-- Features at the bottom of the section with left-aligned text -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 text-left">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <i class="fas fa-bus text-4xl text-blue-600 mb-4"></i>
                <h4 class="text-xl font-bold mb-2">Wide Network</h4>
                <p>Extensive bus routes covering multiple destinations.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                <h4 class="text-xl font-bold mb-2">Safe Travel</h4>
                <p>Verified buses and drivers ensuring your safety.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <i class="fas fa-ticket-alt text-4xl text-blue-600 mb-4"></i>
                <h4 class="text-xl font-bold mb-2">Easy Booking</h4>
                <p>Quick and hassle-free ticket booking process.</p>
            </div>
        </div>
    </section>
</main>

<footer class="bg-blue-800 text-white py-6 mt-10">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 GoldenWay. All rights reserved.</p>
    </div>
</footer>

@vite('resources/js/app.js')
@endsection
