<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    
    </head>
    <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center">
                <!-- <img src="{{ asset('images/logo.png') }}" alt="GoldenWay Logo" class="h-10 mr-4"> -->
                <h1 class="text-2xl font-bold">GoldenWay</h1>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-blue-200">Home</a></li>
                    <li><a href="#" class="hover:text-blue-200">Routes</a></li>
                    <li><a href="#" class="hover:text-blue-200">Bookings</a></li>
                    <li><a href="#" class="hover:text-blue-200">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10 px-4">
        <section class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-3xl font-bold text-blue-600 mb-6 text-center">Book Your Bus Ticket</h2>
            
            <form action="" method="GET" class="max-w-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="from" class="block text-gray-700 mb-2">From</label>
                        <input type="text" id="from" name="from" 
                               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                               placeholder="Departure City" required>
                    </div>
                    <div>
                        <label for="to" class="block text-gray-700 mb-2">To</label>
                        <input type="text" id="to" name="to" 
                               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                               placeholder="Arrival City" required>
                    </div>
                    <div>
                        <label for="date" class="block text-gray-700 mb-2">Date</label>
                        <input type="date" id="date" name="date" 
                               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                               required>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button type="submit" 
                            class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300">
                        Search Buses
                    </button>
                </div>
            </form>
        </section>

        <section class="mt-10 text-center">
            <h3 class="text-2xl font-semibold mb-6">Why Choose GoldenWay?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
    

    </body>
</html>
