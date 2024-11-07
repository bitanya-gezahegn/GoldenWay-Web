@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="dashboardcss.css">
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
    <li><a href="#"><i class="fas fa-user-plus"></i>Ragister Employee </a></li>
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

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
*{
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
}
body {
  font-family: 'Roboto', sans-serif;
}
.sidebar {
  position: fixed;
  left: -250px;
  width: 250px;
  height: 100%;
  background: #000000;
  transition: all .5s ease;
}
.sidebar header {
  font-size: 21px;
  color: white;
  line-height: 70px;
  text-align: center;
  background: #a8a605;
  user-select: none;
}
.sidebar ul a{
  display: block;
  height: 100%;
  width: 100%;
  line-height: 65px;
  font-size: 18px;
  color: white;
  padding-left: 40px;
  box-sizing: border-box;
  border-bottom: 1px solid rgb(163, 154, 27);
  border-top: 1px solid rgba(255,255,255,.1);
  transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 16px;
}
#check{
  display: none;
}
label #btn,label #cancel{
  position: absolute;
  background: #000000;
  border-radius: 3px;
  cursor: pointer;
}
label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
  transition: all .5s;
}
label #cancel{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #a8b311;
  padding: 4px 9px;
  transition: all .5s ease;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
#check:checked ~ section{
  margin-left: 250px;
}
section{
  background: url(bg.jpeg) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: all .5s;
}
</style>
@endsection