@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<head>
    <link rel="stylesheet" href="css/home.css">
</head>

<main class="container mx-auto mt-10 px-4">
    <!-- <section class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-3xl font-bold text-blue-600 mb-6 text-center">Book Your Bus Ticket</h2>
        
        <form action="" method="GET" class="search-form">
<div class="form-row">
<div class="form-group">
  <label for="from">From:</label>
  <input type="text" id="from" name="from" placeholder="Departure City">
</div>
<div class="form-group">
  <label for="to">To:</label>
  <input type="text" id="to" name="to" placeholder="Arrival City">
</div>
</div>
<div class="form-row">
<div class="form-group">
  <label for="departure-date">Departure Date:</label>
  <input type="date" id="departure-date" name="departure-date">
</div>
<div class="form-group">
  <label for="arrival-date">Arrival Date:</label>
  <input type="date" id="arrival-date" name="arrival-date">
</div>
</div>
<button type="submit">Search</button>
</form>
    </section> -->

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
   
@endsection