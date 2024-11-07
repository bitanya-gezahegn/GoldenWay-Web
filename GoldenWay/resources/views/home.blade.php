@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<style>   
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-color: #fff; /* White background */
}

/* Header */
header {
background-color: #F5D468; /* Golden yellow */
padding: 20px;
color: #333; /* Dark text */
}

header h1 {
margin: 0;
}

header nav ul {
list-style: none;
margin: 0;
padding: 0;
}

header nav ul li {
display: inline-block;
margin-right: 20px;
}

header nav ul li a {
color: #333;
text-decoration: none;
}

header nav ul li a:hover {
color: #666; /* Slightly darker hover color */
}

/* Search Form */
.search-form {
background-color: #FFF9D0; /* Light yellow */
padding: 20px;
border-radius: 10px;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
text-align: center;
}

.form-row {
display: flex;
justify-content: space-around;
align-items: center;
margin-bottom: 10px;
margin-right: 600px;
margin-left: 100px;


}

.form-group {
display: flex;
flex-direction: column;
align-items: center;
margin: 0 10px; /* Adjust margin to control spacing */
}

.form-group label {
display: block;
margin-bottom: 5px;
}

.form-group input {
width: 150px; /* Adjust width as needed */
padding: 10px;
border: 1px solid #ccc;
border-radius: 5px;
}

.search-form button {
background-color: #D32F2F; /* Dark red */
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
 margin-right: 500px;
}

.search-form button:hover {
background-color: #992222; /* Darker red on hover */
}

/* Why Choose GoldenWay? Section */
.why-choose {
margin-top: 30px;
}

.why-choose h2 {
margin-bottom: 20px;
}

.why-choose ul {
list-style: none;
padding: 0;
margin: 0;
}

.why-choose ul li {
margin-bottom: 10px;
}

.why-choose ul li i {
text-align: center;
margin-bottom: 10px;
}

/* Footer */
footer {
background-color: #F5D468; /* Golden yellow */
padding: 20px;
color: #333;
text-align: center;
}
      </style>  
<main class="container mx-auto mt-10 px-4">
    <section class="bg-white shadow-md rounded-lg p-8">
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
   
@endsection