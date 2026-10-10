```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel') | Bus Booking</title>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- Admin CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
</head>

<body>

<div class="admin-wrapper">

    {{-- Sidebar --}}
    <aside class="admin-sidebar" id="adminSidebar">

        <a href="{{ route('admin.dashboard') }}" class="admin-brand">
            <div class="admin-brand-icon">
                <i class="fas fa-bus"></i>
            </div>

            <div>
                <strong>Bus Booking</strong>
                <small>ADMINISTRATION</small>
            </div>
        </a>

        <div class="sidebar-label">Main Menu</div>

        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-chart-pie"></i>
            <span>Dashboard</span>
        </a>

        <div class="sidebar-label">Management</div>

        <a href="{{ route('buses.index') }}"
           class="sidebar-link {{ request()->routeIs('buses.*') ? 'active' : '' }}">
            <i class="fas fa-bus"></i>
            <span>Buses</span>
        </a>

        <a href="{{ route('routes.index') }}"
           class="sidebar-link {{ request()->routeIs('routes.*') ? 'active' : '' }}">
            <i class="fas fa-route"></i>
            <span>Routes</span>
        </a>

        <a href="{{ route('trips.index') }}"
           class="sidebar-link {{ request()->routeIs('trips.*') ? 'active' : '' }}">
            <i class="fas fa-calendar-alt"></i>
            <span>Trips & Schedules</span>
        </a>

        <a href="{{ route('bookings.index') }}"
           class="sidebar-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}">
            <i class="fas fa-ticket-alt"></i>
            <span>Bookings</span>
        </a>

        <div class="sidebar-bottom">
            <a href="{{ url('/') }}" class="sidebar-link">
                <i class="fas fa-globe"></i>
                <span>Visit Website</span>
            </a>
        </div>

    </aside>

    {{-- Main Area --}}
    <main class="admin-main">

        {{-- Topbar --}}
        <header class="admin-topbar">

            <div class="d-flex align-items-center gap-3">
                <button type="button"
                        class="admin-mobile-toggle"
                        id="sidebarToggle"
                        aria-label="Toggle sidebar">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="admin-topbar-title">
                    Admin Panel
                    <span class="mx-2">/</span>
                    <strong class="text-dark">@yield('title', 'Dashboard')</strong>
                </div>
            </div>

            <div class="admin-user">
                <div class="admin-avatar">
                    <i class="fas fa-user-shield"></i>
                </div>

                <div>
                    <div class="admin-user-name">
                        {{ auth()->user()?->name ?? 'Administrator' }}
                    </div>
                    <div class="admin-user-role">Admin Account</div>
                </div>
            </div>

        </header>

        {{-- Page Content --}}
        <section class="admin-content">
            @yield('content')
        </section>

    </main>

</div>

<script>
    document.getElementById('sidebarToggle')?.addEventListener('click', function () {
        document.getElementById('adminSidebar')?.classList.toggle('show');
    });
</script>

</body>
</html>
```