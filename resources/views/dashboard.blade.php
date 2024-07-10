@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Dashboard</h1>

        <div class="row">
            <!-- Staff Management -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-info border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Staff Management</h5>
                        <p class="card-text flex-grow-1">Manage your restaurant staff efficiently.</p>
                    </div>
                </div>
            </div>

            <!-- Customer Management -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-info border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Customer Management</h5>
                        <p class="card-text flex-grow-1">Enhance customer experience with personalized interactions.</p>
                    </div>
                </div>
            </div>

            <!-- Food Items Management -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Food Items Management</h5>
                        <p class="card-text flex-grow-1">Curate your menu with seasonal and popular dishes.</p>
                    </div>
                </div>
            </div>

            <!-- Food Orders -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-danger border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Food Orders</h5>
                        <p class="card-text flex-grow-1">Efficiently manage and track food orders.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Invoices -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-success border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Invoices</h5>
                        <p class="card-text flex-grow-1">Streamline billing and manage invoices seamlessly.</p>
                    </div>
                </div>
            </div>

            <!-- Payments -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-primary border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Payments</h5>
                        <p class="card-text flex-grow-1">Track and manage payment transactions securely.</p>
                    </div>
                </div>
            </div>

            <!-- Food Delivery -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-secondary border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Food Delivery</h5>
                        <p class="card-text flex-grow-1">Ensure timely and efficient food delivery logistics.</p>
                    </div>
                </div>
            </div>

            <!-- Placeholder Card -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-info border-dark shadow rounded-lg h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold">Placeholder Card</h5>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
                            orci non purus pulvinar volutpat. Mauris vel lacinia eros, id pellentesque lectus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
