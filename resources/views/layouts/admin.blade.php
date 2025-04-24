<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            flex-shrink: 0;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .logout-btn {
            background: none;
            border: none;
            color: white;
            padding: 12px 20px;
            text-align: left;
            width: 100%;
        }

        .logout-btn:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('projects.index') }}">Manage Projects</a>
    
        <!-- Pricing Plan Dropdown (using HTML/CSS) -->
        <div class="dropdown">
            <a class="dropdown-toggle d-block px-3 py-2" href="#" id="pricingDropdown" data-bs-toggle="collapse" data-bs-target="#pricingMenu" aria-expanded="false">
                Pricing Plans
            </a>
            <div class="collapse" id="pricingMenu">
                <a href="{{ route('pricing-plans.index') }}" class="ps-4">All Plans</a>
                <a href="{{ route('pricing-plans.create') }}" class="ps-4">Add New Plan</a>
            </div>
        </div>
    
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    

<div class="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <span class="navbar-text">
                Welcome, {{ Auth::user()->name ?? 'Admin' }}
            </span>
        </div>
    </nav>

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
