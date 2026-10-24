@extends('admin.dashboard-master')

@section('body')

    <div class="page-heading">
        <div>
            <h1>Welcome back, {{ auth()->user()->name ?? 'Admin' }} 👋</h1>
            <p>Here's what's happening with your bus booking business today.</p>
        </div>

        <a href="{{ url('/admin/bookings') }}" class="btn btn-primary-custom">
            <i class="fa-solid fa-plus me-2"></i> New Booking
        </a>
    </div>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>
<div class="row g-3 mb-4">

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon purple">
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                        <span class="trend">Overview</span>
                    </div>
                    <div class="stat-label">Total Bookings</div>
                    <div class="stat-number">1,284</div>
                    <div class="stat-note">All-time booking records</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon blue">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                        <span class="trend">Fleet</span>
                    </div>
                    <div class="stat-label">Total Buses</div>
                    <div class="stat-number">24</div>
                    <div class="stat-note">Registered buses</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon green">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                        <span class="trend">Revenue</span>
                    </div>
                    <div class="stat-label">Total Revenue</div>
                    <div class="stat-number">৳ 2.4L</div>
                    <div class="stat-note">Sample revenue figure</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon orange">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <span class="trend">Users</span>
                    </div>
                    <div class="stat-label">Total Customers</div>
                    <div class="stat-number">856</div>
                    <div class="stat-note">Sample customer count</div>
                </div>
            </div>

        </div>

        <div class="row g-3 mb-4">

            <div class="col-12 col-xl-8">
                <div class="panel">

                    <div class="panel-heading">
                        <div>
                            <h5>Booking Overview</h5>
                            <p>Illustrative weekly booking activity</p>
                        </div>
                        <button class="btn btn-sm btn-light" type="button"
                                style="font-size:10px;border:1px solid #edf0f5">
                            This Week <i class="fa-solid fa-chevron-down ms-2"></i>
                        </button>
                    </div>

                    <div class="chart-area">

                        @php
                            $chart = [
                                ['day' => 'Mon', 'a' => 45, 'b' => 65],
                                ['day' => 'Tue', 'a' => 70, 'b' => 45],
                                ['day' => 'Wed', 'a' => 55, 'b' => 80],
                                ['day' => 'Thu', 'a' => 85, 'b' => 58],
                                ['day' => 'Fri', 'a' => 62, 'b' => 90],
                                ['day' => 'Sat', 'a' => 95, 'b' => 72],
                                ['day' => 'Sun', 'a' => 74, 'b' => 55],
                            ];
                        @endphp

                        @foreach($chart as $item)
                            <div class="chart-column">
                                <div class="bar-pair">
                                    <div class="bar bar-secondary"
                                         style="height:{{ $item['a'] }}%"></div>
                                    <div class="bar bar-primary"
                                         style="height:{{ $item['b'] }}%"></div>
                                </div>
                                <span>{{ $item['day'] }}</span>
                            </div>
                        @endforeach

                    </div>

                    <div class="legend">
                        <span><i class="legend-dot" style="background:#4f46e5"></i>This week</span>
                        <span><i class="legend-dot" style="background:#e0e7ff"></i>Previous period</span>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="panel">

                    <div class="panel-heading">
                        <div>
                            <h5>Quick Actions</h5>
                            <p>Manage your operations</p>
                        </div>
                        <i class="fa-solid fa-bolt" style="color:#818cf8"></i>
                    </div>

                    <a href="{{ url('/admin/buses/create') }}" class="quick-link">
                        <i class="fa-solid fa-bus"></i>
                        Add New Bus
                        <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>
                    </a>

                    <a href="{{ url('/admin/routes/create') }}" class="quick-link">
                        <i class="fa-solid fa-route"></i>
                        Create Bus Route
                        <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>
                    </a>

                    <a href="{{ url('/admin/trips/create') }}" class="quick-link">
                        <i class="fa-solid fa-calendar-plus"></i>
                        Schedule a Trip
                        <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>
                    </a>

                    <a href="{{ url('/admin/bookings') }}" class="quick-link">
                        <i class="fa-solid fa-list-check"></i>
                        Manage Bookings
                        <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>
                    </a>

                </div>
            </div>

        </div>

<div class="footer">
            © {{ date('Y') }} BusBooking Admin Panel. All rights reserved.
        </div>

@endsection