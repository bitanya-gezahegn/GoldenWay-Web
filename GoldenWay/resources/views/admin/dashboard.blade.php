@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    <!-- Sidebar toggle button and sidebar menu -->
    <input type="checkbox" id="check" value="checked" checked="checked">
    <label >
      <i class="fas fa-bars" id="btn"></i>
   
    </label>
    <div class="sidebar">
      <header>Dashboard</header>
      <ul>
        <!-- Register Employee -->
        <li>
          <a href="#" onclick="toggleMenu('registerEmployee')">
            <i class="fas fa-user-plus"></i> Register Employee
          </a>
          <ul class="submenu" id="registerEmployee">
            <li><a href="#">Employee Registration Form</a></li>
            <li><a href="#" id="employeeListMenu">Employee List</a></li> <!-- Employee List submenu link -->
            <li><a href="#">Registration History</a></li>
            <li><a href="#">Employee Profile</a></li>
          </ul>
        </li>
        
        <!-- Manage Booking -->
        <li>
          <a href="#" onclick="toggleMenu('manageBooking')">
            <i class="fas fa-calendar-alt"></i> Manage Booking
          </a>
          <ul class="submenu" id="manageBooking">
            <li><a href="#">Booking Management System</a></li>
            <li><a href="#">Booking Filters</a></li>
            <li><a href="#">Edit Booking</a></li>
            <li><a href="#">Booking History</a></li>
          </ul>
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
            <li><a href="#">Promotion Analytics</a></li>
          </ul>
        </li>

        <!-- Manage User -->
        <li>
          <a href="#" onclick="toggleMenu('manageUser')">
            <i class="fas fa-users"></i> Manage User
          </a>
          <ul class="submenu" id="manageUser">
            <li><a href="#" id="userListMenu">User List</a></li>
            <li><a href="#">Add New User</a></li>
            <li><a href="#">Edit User</a></li>
            <li><a href="#">User Activity Log</a></li>
          </ul>
        </li>


        
        <!-- View Feedback -->
        <li>
          <a href="#" onclick="toggleMenu('viewFeedback')">
            <i class="fas fa-comments"></i> View Feedback
          </a>
          <ul class="submenu" id="viewFeedback">
            <li><a href="#">User Feedback List</a></li>
            <li><a href="#">View Detailed Feedback</a></li>
            <li><a href="#">Feedback Analytics</a></li>
            <li><a href="#">Respond to Feedback</a></li>
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

        <!-- Notifications -->
        <li>
          <a href="#" onclick="toggleMenu('notifications')">
            <i class="fas fa-bell"></i> Notifications
          </a>
          <ul class="submenu" id="notifications">
            <li><a href="#">Notification List</a></li>
            <li><a href="#">Create New Notification</a></li>
            <li><a href="#">Notification Settings</a></li>
            <li><a href="#">Notification History</a></li>
          </ul>
        </li>

        <!-- Payment Gateway -->
        <li>
          <a href="#" onclick="toggleMenu('paymentGateway')">
            <i class="fas fa-credit-card"></i> Payment Gateway
          </a>
          <ul class="submenu" id="paymentGateway">
            <li><a href="#">Transaction History</a></li>
            <li><a href="#">Payment Settings</a></li>
            <li><a href="#">Refund Requests</a></li>
            <li><a href="#">Payment Analytics</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- Employee Table -->
    <!-- <div class="container mt-4" id="employeeList" style="display:none; margin-left: 300px;">
        <h2>Employee List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Hire Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>0911121314</td> <!-- Updated phone number -->
                    <!-- <td>Software Engineer</td>
                    <td>IT Department</td>
                    <td>2023-05-01</td>
                    <td>Active</td>
                    <td>
                        <a href="#">Edit</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>
                <tr> -->
                    <!-- <td>2</td>
                    <td>Jane Smith</td>
                    <td>janesmith@example.com</td>
                    <td>0911111213</td> <!-- Updated phone number -->
                    <!-- <td>HR Manager</td> -->
                    <!-- <td>HR Department</td>
                    <td>2022-03-15</td>
                    <td>Active</td>
                    <td> -->
                        <!-- <a href="#">Edit</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>
            </tbody> -->
        <!-- </table>
    </div>  -->

    <!-- Sidebar and body styling with scrollable menu and clickable dropdowns -->


    <div class="container mt-4" id="userList" style="display:none; margin-left: 300px;">
    <h2>User List</h2>
    <x-dynamic-table table="users" />
</div>

    <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
      * {
        padding: 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
      }
      body {
        font-family: 'Roboto', sans-serif;
        transition: margin-left .5s ease;
      }
      .sidebar {
        position: fixed;
        left: -250px;
        width: 300px;
        height: 100%;
        background: #111111;
        overflow-y: auto; /* Enable scrolling */
        transition: all .5s ease;
      }
      .sidebar header {
        font-size: 21px;
        color: white;
        line-height: 70px;
        text-align: center;
        background: #FFD700;
        user-select: none;
      }
      .sidebar ul {
        padding: 0;
      }
      .sidebar ul li {
        position: relative;
      }
      .sidebar ul a {
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
      .sidebar ul a i {
        margin-right: 16px;
      }
      /* Submenu styling */
      .submenu {
        display: none;
        background: #333;
        overflow-y: hidden;
      }
      .submenu li a {
        padding-left: 60px;
        line-height: 50px;
      }
      #check {
        display: none;
        
      }
      label #btn, label #cancel {
        position: absolute;
        background: #000000;
        border-radius: 3px;
        cursor: pointer;
      }
      label #btn {
        left: 40px;
        top: 25px;
        font-size: 35px;
        color: white;
        padding: 6px 12px;
        transition: all .5s;
      }
      label #cancel {
        z-index: 1111;
        left: -195px;
        top: 17px;
        font-size: 30px;
        color: #a8b311;
        padding: 4px 9px;
        transition: all .5s ease;
      }
      #check:checked ~ .sidebar {
        left: 0;
      }
      #check:checked ~ label #btn {
        left: 250px;
        opacity: 0;
        pointer-events: none;
      }
      #check:checked ~ label #cancel {
        left: 195px;
      }
      #check:checked ~ section {
        margin-left: 250px;
      }
      section {
        background: url(bg.jpeg) no-repeat;
        background-position: center;
        background-size: cover;
        height: 100vh;
        transition: all .5s;
      }

      /* Table Styling */
      .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
      }
      .table th, .table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
        word-wrap: break-word; /* Enable word wrapping */
        white-space: normal; 
      }
      .table th {
        background-color: #f2f2f2;
      }
    </style>

    <!-- JavaScript for submenu toggle, dynamic resizing, and user list visibility -->
    <script>
      function toggleMenu(id) {
        const submenu = document.getElementById(id);
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';

       
      }

      // Show user list when the "user List" submenu item is clicked
      document.getElementById('userListMenu').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
       

        const userList = document.getElementById('userList');
        userList.style.display = userList.style.display === 'block' ? 'none' : 'block';
      });

      // Update margin-left of the content section based on the sidebar toggle
      document.getElementById('check').addEventListener('change', function() {
        const userList = document.getElementById('userList');
        if (this.checked) {
         userList.style.marginLeft = '250px'; // Shift the table right when sidebar is open
        } else {
          userList.style.marginLeft = '0'; // Reset margin when sidebar is closed
        }
      });
    </script>

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection
