<aside class="sidebar" id="sidebar">

    <a href="{{ route('admin.dashboard.index') }}" class="brand">
        <span class="brand-icon">
            <i class="fa-solid fa-bus-simple"></i>
        </span>
        <span>Bus<span style="color:#818cf8">Booking</span></span>
    </a>

    <div class="menu-label">MAIN MENU</div>

    <a href="{{ route('admin.dashboard.index') }}" class="brand">
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