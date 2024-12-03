@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Sidebar toggle button and sidebar menu -->
    <input type="checkbox" id="check" value="checked" checked="checked">
    <label >
      <i class="fas fa-bars" id="btn"></i>
   
    </label>
    <div class="sidebar">
      <header>Dashboard</header>
      <ul>
        <!-- Employee management -->
        <li>
          <a href="#" onclick="toggleMenu('registerEmployee')">
            <i class="fas fa-user-plus"></i> Employee management
          </a>
          <ul class="submenu" id="registerEmployee">
            <li><a href="#" id="driverListMenu">Driver</a></li>
            <li><a href="#" id="operationsOfficerListMenu">Operation officer</a></li> <!-- Employee List submenu link -->
             <li><a href="#" id="ticketOfficerListMenu">Ticket officer</a></li>
            <!-- <li><a href="#">Employee Profile</a></li>  -->
          </ul>
        </li>

        <!-- User management -->
        <li>

          <a href="#" onclick="toggleMenu('manageUser')">
            <i class="fas fa-users"></i> User management
          </a>
          <ul class="submenu" id="manageUser">
            <li><a href="#" id="userListMenu">User List</a></li>
            <li><a href="#">Add New User</a></li>
            <li><a href="#">Edit User</a></li>
            <li><a href="#">User Activity Log</a></li>
          </ul>
        </li>

        
        <!--Booking management -->
        <li>
        <a href="{{ route('operationofficerui') }}">
    <i class="fas fa-calendar-alt"></i> Booking management
</a>

          <!-- <ul class="submenu" id="manageBooking">
            <li><a href="#">Booking Management System</a></li>
            <li><a href="#">Booking Filters</a></li>
            <li><a href="#">Edit Booking</a></li>
            <li><a href="#">Booking History</a></li>
          </ul> -->
        </li>

        <!-- Promotional Content -->
        <li>
          <a href="#" onclick="toggleMenu('promotionalContent')">
            <i class="fas fa-bullhorn"></i> Promotional Content
          </a>
          <ul class="submenu" id="promotionalContent">
            <li><a href="#">Promotions Overview</a></li>
            <li><a href="#">Add New Promotion</a></li>
            <li><a href="#">Active & Expired Promotions</a></li>
            <!-- <li><a href="#">Promotion Analytics</a></li> -->
          </ul>
        </li>

                <!-- Reports -->
                <li>
          <a href="#" onclick="toggleMenu('reports')">
            <i class="fas fa-tools"></i> Reports
          </a>
          <ul class="submenu" id="reports">
            <li><a href="#">Sales and Financial Reports</a></li>
            <li><a href="#">Booking Reports</a></li>
            <li><a href="#">Employee Performance Reports</a></li>
            <li><a href="#">Export Options</a></li>
          </ul>
        </li>

                
        <!-- User feedback -->
        <li>
          <a href="#" onclick="toggleMenu('viewFeedback')">
            <i class="fas fa-comments"></i> User feedback
          </a>
          <ul class="submenu" id="viewFeedback">
            <li><a href="#">User Feedback List</a></li>
            <!-- <li><a href="#">View Detailed Feedback</a></li> -->
            <!-- <li><a href="#">Feedback Analytics</a></li> -->
            <li><a href="#">Respond to Feedback</a></li>
          </ul>
        </li>



        <!-- Notifications -->
        <!-- <li>
          <a href="#" onclick="toggleMenu('notifications')">
            <i class="fas fa-bell"></i> Notifications
          </a>
          <ul class="submenu" id="notifications">
            <li><a href="#">Notification List</a></li>
            <li><a href="#">Create New Notification</a></li>
            <li><a href="#">Notification Settings</a></li>
            <li><a href="#">Notification History</a></li>
          </ul>
        </li> -->

        <!-- Payment Gateway -->
        <!-- <li>
          <a href="#" onclick="toggleMenu('paymentGateway')">
            <i class="fas fa-credit-card"></i> Payment Gateway
          </a>
          <ul class="submenu" id="paymentGateway">
            <li><a href="#">Transaction History</a></li>
            <li><a href="#">Payment Settings</a></li>
            <li><a href="#">Refund Requests</a></li>
            <li><a href="#">Payment Analytics</a></li>
          </ul>
        </li> -->
      </ul>
    </div>

    {{-- USER TABLE --}}
    <div class="container mt-4" id="userList" style="display:none; margin-left: 300px;">
    <h2 class="tableTitle">User List</h2>
    @php
        use App\Models\User;
        // Define the role, columns, and retrieve data
        $role = 'user'; // Or any other role
        $columns = ['id', 'name', 'email', 'created_at', 'email_verified_at', 'updated_at'];
        $data = User::role($role)->get();
    @endphp

    
        <x-dynamic-table :data="$data" :columns="$columns" :role="$role" />
    
</div>

{{-- DRIVER TABLE --}}

<div class="container mt-4" id="driverList" style="display:none; margin-left: 300px;   ">
  <h2>driver List</h2>
  @php

  // Define the role, columns, and retrieve data
  $role = 'driver'; // Or any other role
  $columns = ['id','name', 'email', 'email_verified_at','created_at','updated_at'];
  $data = User::role($role)->get();

@endphp

<x-dynamic-table :data="$data" :columns="$columns" :role="$role"  class="container mt-4"/>

</div>
{{-- OPERATIONS OFFICER TABLE --}}
<div  id="operationsOfficerList" style="display:none; margin-left: 300px;">
  <h2>Operations officer List</h2>
  @php

  // Define the role, columns, and retrieve data
  $role = 'operationsOfficer'; // Or any other role
  $columns = ['id','name', 'email', 'email_verified_at','created_at','updated_at'];
  $data = User::role($role)->get();

@endphp

<x-dynamic-table :data="$data" :columns="$columns" :role="$role" class="container mt-4"/>

</div>
{{-- TICKET OFFICER TABLE --}}
<div class="container mt-4" id="ticketOfficerList" style="display:none; margin-left: 300px;">
  <h2>Ticket Officer List</h2>
  @php

  // Define the role, columns, and retrieve data
  $role = 'ticketOfficer'; // Or any other role
  $columns = ['id','name', 'email', 'email_verified_at','created_at','updated_at'];
  $data = User::role($role)->get();

@endphp

<x-dynamic-table :data="$data" :columns="$columns" :role="$role" />

</div>
<div id="popup-form" style="display: none;">
    <form>
      <h2>Update Form</h2>
        <input type="hidden" id="row-id" />
        <label for="name">Name:</label>
        <input type="text" id="name" />
        <label for="email">Email:</label>
        <input type="email" id="email" />
        
        <button id="update-button">Update</button>
        <button type="button" id="close-popup">Close</button>
    </form>
</div>







<!-- Confirmation Popup for Deletion -->
<div id="delete-popup-form" 
    style="display: none; position: fixed; top: 300px; left: 400px; right: 500px; 
    width: 350px; height: 350px; justify-content: center; align-items: center;">
    <div style="background: #fff; padding: 20px; 
    border: 3px solid rgb(184, 157, 39);; border-radius: 8px; text-align: center;">
        <p style="margin-bottom: 20px;">Are you sure you want to delete this user?</p>
        <button id="delete-yes" style="margin-right: 10px; background-color: rgb(184, 157, 39);; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Yes</button>
        <button id="delete-no" style="background-color:rgb(184, 157, 39);; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">No</button>
    </div>
</div>


<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<script src="{{ asset('js/dashboard.js') }}"></script>

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection
