@extends('layouts.app')

@section('title', 'Admin Dashboard')
@vite(['resources/css/dashboard.css'])

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <!-- <link rel="stylesheet" href="dashboardcss.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Dashboard</header>
  <ul>
    <li><a href="#"><i class="fas fa-user-plus"></i>Register Employee </a></li>
    <li><a href="#"><i class="fas fa-calendar-alt"></i>Manage Booking</a></li>
    <li><a href="#"><i class="fas fa-bullhorn"></i>Promotional Content</a></li>
    <li><a href="#"><i class="fas fa-users"></i> Manage User</a></li>  
    <li><a href="#"><i class="fas fa-comments"></i> View Feedback</a></li> 
    <li><a href="#"><i class="fas fa-tools"></i>Reports</a></li> 
    <li><a href="#"><i class="fas fa-bell"></i>Notification</a></li> 
    <li><a href="#"><i class="fas fa-credit-card"></i>Payment Gateway</a></li> 
        
      </ul>
</div>

  </body>
</html>



@endsection
