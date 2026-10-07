<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard') - Bus Booking</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7fb;
            font-family: "Segoe UI", Arial, sans-serif;
            color: #1f2937;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .admin-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 260px;
            height: 100vh;
            background: #111827;
            color: #fff;
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar-brand {
            height: 75px;
            display: flex;
            align-items: center;
            padding: 0 24px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2563eb;
            margin-right: 12px;
            font-size: 20px;
        }

        .brand-text {
            font-size: 19px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .sidebar-section {
            padding: 25px 15px 8px;
            color: #6b7280;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0 12px;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 12px 14px;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 9px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .sidebar-menu a i {
            width: 20px;
            font-size: 17px;
        }

        .sidebar-menu a:hover {
            background: #1f2937;
            color: #fff;
        }

        .sidebar-menu a.active {
            background: #2563eb;
            color: #fff;
        }

        /* =========================
           MAIN AREA
        ========================= */

        .admin-main {
            margin-left: 260px;
            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================= */

        .admin-topbar {
            height: 75px;
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 900;
        }

        .page-breadcrumb {
            font-size: 14px;
            color: #6b7280;
        }

        .page-breadcrumb strong {
            color: #111827;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .profile-info {
            line-height: 1.2;
        }

        .profile-name {
            font-size: 14px;
            font-weight: 600;
            color: #111827;
        }

        .profile-role {
            font-size: 12px;
            color: #6b7280;
        }

        /* =========================
           CONTENT
        ========================= */

        .admin-content {
            padding: 30px;
        }

        /* =========================
           MOBILE
        ========================= */

        .sidebar-toggle {
            display: none;
            border: none;
            background: transparent;
            font-size: 23px;
        }

        @media (max-width: 991px) {

            .admin-sidebar {
                left: -260px;
            }

            .admin-sidebar.show {
                left: 0;
            }

            .admin-main {
                margin-left: 0;
            }

            .sidebar-toggle {
                display: block;
            }

            .admin-topbar {
                padding: 0 18px;
            }

            .admin-content {
                padding: 20px;
            }

            .profile-info {
                display: none;
            }
        }
    </style>

    @stack('styles')

</head>

<body>

    <!-- =========================
         SIDEBAR
    ========================== -->

    <aside class="admin-sidebar" id="adminSidebar">

        <div class="sidebar-brand">

            <div class="brand-icon">
                <i class="bi bi-bus-front-fill"></i>
            </div>

            <div class="brand-text">
                Bus Booking
            </div>

        </div>


        <!-- Main Menu -->

        <div class="sidebar-section">
            Main Menu
        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="{{ route('dashboard') }}"
                   class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">

                    <i class="bi bi-grid-1x2-fill"></i>

                    <span>Dashboard</span>

                </a>
            </li>

        </ul>


        <!-- Management -->

        <div class="sidebar-section">
            Management
        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="{{ route('buses.index') }}"
                   class="{{ request()->routeIs('buses.*') ? 'active' : '' }}">

                    <i class="bi bi-bus-front"></i>

                    <span>Buses</span>

                </a>
            </li>


            <li>
                <a href="{{ route('routes.index') }}"
                   class="{{ request()->routeIs('routes.*') ? 'active' : '' }}">

                    <i class="bi bi-signpost-2"></i>

                    <span>Routes</span>

                </a>
            </li>


            <li>
                <a href="#">

                    <i class="bi bi-calendar2-week"></i>

                    <span>Trips</span>

                </a>
            </li>


            <li>
                <a href="#">

                    <i class="bi bi-ticket-perforated"></i>

                    <span>Bookings</span>

                </a>
            </li>

        </ul>


        <!-- Finance -->

        <div class="sidebar-section">
            Finance
        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="#">

                    <i class="bi bi-credit-card"></i>

                    <span>Payments</span>

                </a>
            </li>

        </ul>


        <!-- System -->

        <div class="sidebar-section">
            System
        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="#">

                    <i class="bi bi-people"></i>

                    <span>Users</span>

                </a>
            </li>


            <li>
                <a href="#">

                    <i class="bi bi-gear"></i>

                    <span>Settings</span>

                </a>
            </li>

        </ul>

    </aside>


    <!-- =========================
         MAIN
    ========================== -->

    <main class="admin-main">


        <!-- TOPBAR -->

        <header class="admin-topbar">

            <div class="d-flex align-items-center gap-3">

                <button
                    class="sidebar-toggle"
                    onclick="toggleSidebar()">

                    <i class="bi bi-list"></i>

                </button>


                <div class="page-breadcrumb">

                    Admin Panel

                    <span class="mx-2">/</span>

                    <strong>
                        @yield('page-title', 'Dashboard')
                    </strong>

                </div>

            </div>


            <!-- Admin Profile -->

            <div class="admin-profile">

                <div class="profile-avatar">
                    A
                </div>

                <div class="profile-info">

                    <div class="profile-name">
                        Admin
                    </div>

                    <div class="profile-role">
                        Administrator
                    </div>

                </div>

            </div>

        </header>


        <!-- PAGE CONTENT -->

        <section class="admin-content">

            @yield('content')

        </section>


    </main>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- Sidebar JS -->

    <script>

        function toggleSidebar() {

            document
                .getElementById('adminSidebar')
                .classList
                .toggle('show');

        }

    </script>


    @stack('scripts')

</body>

</html>
