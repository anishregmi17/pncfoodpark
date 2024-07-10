<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNC FOOD PARK</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            padding-top: 1px;
            /* Adjust padding as needed */
            padding-bottom: 3px;
            /* Adjust padding as needed */
            box-shadow: 0 2px 4px rgba(147, 126, 126, 0.1);
            /* Optional: add a subtle shadow */
        }

        .navbar-brand {
            padding-top: 0;
            padding-bottom: 0;
            margin-right: 15px;
            /* Adjust as needed */
        }

        .container {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Replace text with logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo2.png') }}" alt="Logo" height="100"
                    class="d-inline-block align-top">
            </a>
            <!-- End replacement -->

            <!-- Rest of the navbar -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('restaurant-staff.index') }}">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customers.index') }}">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('food-items.index') }}">Food Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Food Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Food Delivery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Invoices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Payments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-1">
        <div class="container">
            <span>&copy; 2024 PNC FOOD PARK. All rights reserved.</span>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
