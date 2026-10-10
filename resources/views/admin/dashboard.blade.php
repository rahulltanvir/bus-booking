
@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid px-0">

    {{-- Page Heading --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-secondary mb-0">
                Welcome to your Bus Booking Admin Panel.
            </p>
        </div>

        <div class="text-secondary small">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->format('d M, Y') }}
        </div>
    </div>

    {{-- Statistics Cards --}}
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 dashboard-stat-card">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Total Buses</p>
                            <h3 class="fw-bold mb-0">
                                {{ \App\Models\Bus::count() }}
                            </h3>
                        </div>
                        <div class="dashboard-icon bg-primary-subtle text-primary">
                            <i class="fas fa-bus"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-secondary">
                        <i class="fas fa-truck me-1"></i>
                        Manage your buses
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 dashboard-stat-card">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Total Routes</p>
                            <h3 class="fw-bold mb-0">
                                {{ \App\Models\Route::count() }}
                            </h3>
                        </div>
                        <div class="dashboard-icon bg-success-subtle text-success">
                            <i class="fas fa-route"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-secondary">
                        <i class="fas fa-map-marked-alt me-1"></i>
                        Manage bus routes
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 dashboard-stat-card">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Total Trips</p>
                            <h3 class="fw-bold mb-0">
                                {{ \App\Models\Trip::count() }}
                            </h3>
                        </div>
                        <div class="dashboard-icon bg-warning-subtle text-warning">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-secondary">
                        <i class="fas fa-clock me-1"></i>
                        Manage trip schedules
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 dashboard-stat-card">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Total Bookings</p>
                            <h3 class="fw-bold mb-0">
                                {{ \App\Models\Booking::count() }}
                            </h3>
                        </div>
                        <div class="dashboard-icon bg-danger-subtle text-danger">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-secondary">
                        <i class="fas fa-users me-1"></i>
                        View customer bookings
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Quick Actions --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">

            <div class="mb-4">
                <h5 class="fw-bold mb-1">Quick Actions</h5>
                <p class="text-secondary small mb-0">
                    Quickly access the main management sections.
                </p>
            </div>

            <div class="row g-3">

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('buses.index') }}"
                       class="dashboard-action">
                        <i class="fas fa-bus text-primary"></i>
                        <span>
                            <strong>Manage Buses</strong>
                            <small>View and manage buses</small>
                        </span>
                        <i class="fas fa-arrow-right ms-auto"></i>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('routes.index') }}"
                       class="dashboard-action">
                        <i class="fas fa-route text-success"></i>
                        <span>
                            <strong>Manage Routes</strong>
                            <small>View available routes</small>
                        </span>
                        <i class="fas fa-arrow-right ms-auto"></i>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('trips.index') }}"
                       class="dashboard-action">
                        <i class="fas fa-calendar-alt text-warning"></i>
                        <span>
                            <strong>Manage Trips</strong>
                            <small>Manage trip schedules</small>
                        </span>
                        <i class="fas fa-arrow-right ms-auto"></i>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{ route('bookings.index') }}"
                       class="dashboard-action">
                        <i class="fas fa-ticket-alt text-danger"></i>
                        <span>
                            <strong>Manage Bookings</strong>
                            <small>View ticket bookings</small>
                        </span>
                        <i class="fas fa-arrow-right ms-auto"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- Recent Bookings --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-1">Recent Bookings</h5>
                    <p class="text-secondary small mb-0">
                        Latest booking records.
                    </p>
                </div>

                <a href="{{ route('bookings.index') }}"
                   class="btn btn-outline-primary btn-sm">
                    View All
                </a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Booking ID</th>
                            <th>Customer</th>
                            <th>Booking Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse(\App\Models\Booking::with('user')->latest()->take(5)->get() as $booking)
                            <tr>
                                <td class="fw-semibold">
                                    #{{ $booking->id }}
                                </td>

                                <td>
                                    {{ $booking->user?->name ?? 'Guest' }}
                                </td>

                                <td>
                                    {{ $booking->created_at?->format('d M, Y') ?? 'N/A' }}
                                </td>

                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary">
                                        {{ ucfirst($booking->status ?? 'Pending') }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <i class="fas fa-ticket-alt fa-2x text-secondary mb-3"></i>
                                    <p class="text-secondary mb-0">
                                        No bookings available yet.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

@endsection
