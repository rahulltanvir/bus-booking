
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | BusBooking</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

<aside class="sidebar" id="sidebar">

    <a href="{{ route('admin.dashboard') }}" class="brand">
        <span class="brand-icon">
            <i class="fa-solid fa-bus-simple"></i>
        </span>
        <span>Bus<span style="color:#818cf8">Booking</span></span>
    </a>

    <div class="menu-label">MAIN MENU</div>

    <a href="{{ route('admin.dashboard') }}" class="side-link active">
        <i class="fa-solid fa-chart-pie"></i> Dashboard
    </a>

    <a href="{{ url('/admin/bookings') }}" class="side-link">
        <i class="fa-solid fa-ticket"></i> Bookings
    </a>

    <a href="{{ url('/admin/buses') }}" class="side-link">
        <i class="fa-solid fa-bus"></i> Manage Buses
    </a>

    <a href="{{ url('/admin/routes') }}" class="side-link">
        <i class="fa-solid fa-route"></i> Bus Routes
    </a>

    <a href="{{ url('/admin/trips') }}" class="side-link">
        <i class="fa-solid fa-calendar-days"></i> Trips & Schedules
    </a>

    <div class="menu-label">MANAGEMENT</div>

    <a href="{{ url('/admin/seats') }}" class="side-link">
        <i class="fa-solid fa-chair"></i> Seat Management
    </a>

    <a href="{{ url('/admin/payments') }}" class="side-link">
        <i class="fa-solid fa-credit-card"></i> Payments
    </a>

    <a href="{{ url('/admin/customers') }}" class="side-link">
        <i class="fa-solid fa-users"></i> Customers
    </a>

    <div class="menu-label">SYSTEM</div>

    <a href="{{ url('/admin/settings') }}" class="side-link">
        <i class="fa-solid fa-gear"></i> Settings
    </a>

    <div class="sidebar-bottom">
        <div class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-circle-check" style="color:#4ade80"></i>
            <strong style="font-size:11px">System Operational</strong>
        </div>
        <p>Your bus booking system is ready.</p>
    </div>

</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<main class="main">

    <header class="topbar">

        <div class="d-flex align-items-center gap-3 flex-grow-1">
            <button class="mobile-toggle" id="menuToggle" aria-label="Toggle menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div>
                <div style="font-size:14px;font-weight:800">Dashboard</div>
                <div style="font-size:10px;color:#94a3b8;margin-top:4px">
                    Admin Panel / Overview
                </div>
            </div>

            <div class="search-box ms-3">
                <i class="fa-solid fa-magnifying-glass" style="color:#94a3b8"></i>
                <input type="search" id="dashboardSearch" placeholder="Search bookings...">
                <span style="font-size:10px;color:#94a3b8">⌘ K</span>
            </div>
        </div>

        <div class="top-actions">

            <button class="icon-btn" type="button" title="Notifications">
                <i class="fa-regular fa-bell"></i>
            </button>

            <div class="d-flex align-items-center gap-2">
                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>
                <div class="d-none d-sm-block">
                    <div style="font-size:11px;font-weight:800">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </div>
                    <div style="font-size:10px;color:#94a3b8;margin-top:4px">
                        Administrator
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="content">

        <div class="page-heading">
            <div>
                <h1>Welcome back, {{ auth()->user()->name ?? 'Admin' }} 👋</h1>
                <p>Here's what's happening with your bus booking business today.</p>
            </div>

            <a href="{{ url('/admin/bookings') }}" class="btn btn-primary-custom">
                <i class="fa-solid fa-plus me-2"></i> New Booking
            </a>
        </div>

        {{-- Statistics cards: demonstration values until connected to database --}}
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

        <div class="row g-3">

            <div class="col-12 col-xl-8">
                <div class="panel">

                    <div class="panel-heading">
                        <div>
                            <h5>Recent Bookings</h5>
                            <p>Latest booking records</p>
                        </div>
                        <a href="{{ url('/admin/bookings') }}" class="view-link">
                            View All <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="booking-table" id="bookingTable">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Route</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="booking-id">#BK-1024</td>
                                    <td>
                                        <div class="customer">
                                            <div class="customer-avatar">AR</div>
                                            <span>Arif Rahman</span>
                                        </div>
                                    </td>
                                    <td>Dhaka → Pabna</td>
                                    <td>৳ 650</td>
                                    <td><span class="status status-confirmed">Confirmed</span></td>
                                </tr>

                                <tr>
                                    <td class="booking-id">#BK-1023</td>
                                    <td>
                                        <div class="customer">
                                            <div class="customer-avatar">SK</div>
                                            <span>Sumaiya Khan</span>
                                        </div>
                                    </td>
                                    <td>Dhaka → Rajshahi</td>
                                    <td>৳ 850</td>
                                    <td><span class="status status-pending">Pending</span></td>
                                </tr>

                                <tr>
                                    <td class="booking-id">#BK-1022</td>
                                    <td>
                                        <div class="customer">
                                            <div class="customer-avatar">MH</div>
                                            <span>Mahmud Hasan</span>
                                        </div>
                                    </td>
                                    <td>Pabna → Dhaka</td>
                                    <td>৳ 600</td>
                                    <td><span class="status status-confirmed">Confirmed</span></td>
                                </tr>

                                <tr>
                                    <td class="booking-id">#BK-1021</td>
                                    <td>
                                        <div class="customer">
                                            <div class="customer-avatar">NT</div>
                                            <span>Nusrat Tania</span>
                                        </div>
                                    </td>
                                    <td>Dhaka → Khulna</td>
                                    <td>৳ 900</td>
                                    <td><span class="status status-cancelled">Cancelled</span></td>
                                </tr>

                                <tr>
                                    <td class="booking-id">#BK-1020</td>
                                    <td>
                                        <div class="customer">
                                            <div class="customer-avatar">FI</div>
                                            <span>Fahim Islam</span>
                                        </div>
                                    </td>
                                    <td>Dhaka → Bogura</td>
                                    <td>৳ 700</td>
                                    <td><span class="status status-confirmed">Confirmed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="panel">

                    <div class="panel-heading">
                        <div>
                            <h5>Recent Activity</h5>
                            <p>Latest system updates</p>
                        </div>
                        <i class="fa-solid fa-clock-rotate-left" style="color:#818cf8"></i>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon green">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <h6>Booking confirmed</h6>
                            <p>A booking was confirmed successfully.</p>
                            <small>Recent activity example</small>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon blue">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                        <div>
                            <h6>Bus management</h6>
                            <p>Review your registered bus fleet.</p>
                            <small>System shortcut</small>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon purple">
                            <i class="fa-solid fa-route"></i>
                        </div>
                        <div>
                            <h6>Route management</h6>
                            <p>Manage routes and travel schedules.</p>
                            <small>System shortcut</small>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon orange">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h6>Admin workspace</h6>
                            <p>You are viewing the administration panel.</p>
                            <small>Current session</small>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="footer">
            © {{ date('Y') }} BusBooking Admin Panel. All rights reserved.
        </div>

    </section>

</main>

<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const toggle = document.getElementById('menuToggle');

    function closeSidebar() {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
    }

    toggle.addEventListener('click', function () {
        sidebar.classList.toggle('open');
        overlay.classList.toggle('show');
    });

    overlay.addEventListener('click', closeSidebar);

    // Client-side search for the sample booking table.
    const search = document.getElementById('dashboardSearch');

    search.addEventListener('input', function () {
        const query = this.value.toLowerCase();

        document.querySelectorAll('#bookingTable tbody tr').forEach(function (row) {
            row.style.display = row.textContent.toLowerCase().includes(query)
                ? ''
                : 'none';
        });
    });
</script>

</body>
</html>
