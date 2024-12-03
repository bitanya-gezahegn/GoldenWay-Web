@extends('layouts.app')

@section('title', 'Operation Officer Dashboard')

@section('content')

<!-- Sidebar toggle button and sidebar menu -->
<input type="checkbox" id="check" value="checked" checked="checked">
<label>
  <i class="fas fa-bars" id="btn"></i>
</label>

<div class="sidebar">
  <header>Operation Officer</header>
  <ul>
    <!-- Manage Routes and Schedules -->
    <li>
      <a href="#" onclick="toggleMenu('manageRoutesSchedulesSection')">
        <i class="fas fa-route"></i> Manage Routes & Schedules
      </a>
    </li>

    <!-- Monitor Fleet Status -->
    <li>
      <a href="#" onclick="toggleMenu('monitorFleetStatusSection')">
        <i class="fas fa-bus"></i> Monitor Fleet Status
      </a>
    </li>

    <!-- Issue Refunds -->
    <li>
      <a href="#" onclick="toggleMenu('issueRefundsSection')">
        <i class="fas fa-dollar-sign"></i> Issue Refunds
      </a>
    </li>

    <!-- Assign Drivers -->
    <li>
      <a href="#" onclick="toggleMenu('assignDriversSection')">
        <i class="fas fa-id-badge"></i> Assign Drivers
      </a>
    </li>

    <!-- Coordinate with Drivers -->
    <li>
      <a href="#" onclick="toggleMenu('coordinateDriversSection')">
        <i class="fas fa-comments"></i> Coordinate with Drivers
      </a>
    </li>
  </ul>
</div>

<!-- Content Area (right of the sidebar) -->
<div class="container mt-4" style="margin-left: 300px;">
   <div id="onDisplay" class="menu-section" style="display:block;">
    <h2>Manage Routes and Schedules</h2>
{{-- <x-session-table></x-session-table> --}}
    <!-- Your content for managing routes and schedules goes here -->
  </div>
  
  <!-- Manage Routes & Schedules Section -->
  <div id="manageRoutesSchedulesSection" class="menu-section" style="display:none;">
    <h2>Manage Routes and Schedules</h2>
    <!-- Your content for managing routes and schedules goes here -->
  </div>

  <!-- Monitor Fleet Status Section -->
  <div id="monitorFleetStatusSection" class="menu-section" style="display:none;">
    <h2>Monitor Fleet Status</h2>
    <!-- Your content for fleet status monitoring goes here -->
  </div>

  <!-- Issue Refunds Section -->
  <div id="issueRefundsSection" class="menu-section" style="display:none;">
    <h2>Issue Refunds</h2>
    <!-- Your content for issuing refunds goes here -->
  </div>

  <!-- Assign Drivers Section -->
  <div id="assignDriversSection" class="menu-section" style="display:none;">
    <h2>Assign Drivers</h2>
    <!-- Your content for assigning drivers goes here -->
  </div>

  <!-- Coordinate with Drivers Section -->
  <div id="coordinateDriversSection" class="menu-section" style="display:none;">
    <h2>Coordinate with Drivers</h2>
    <!-- Your content for coordinating with drivers goes here -->
  </div>

</div>

<!-- FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<!-- Link to external CSS and JS files -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<script src="{{ asset('js/dashboard.js') }}"></script>


@endsection
