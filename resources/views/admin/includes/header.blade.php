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

            
<div class="dropdown admin-user-dropdown">
    <div class="d-flex align-items-center gap-2 user-dropdown-trigger">
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

        <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
    </div>

    <div class="admin-dropdown-menu">
        <div class="dropdown-user-info">
            <strong>{{ auth()->user()->name ?? 'Administrator' }}</strong>
            <small>{{ auth()->user()->email ?? '' }}</small>
        </div>

        <div class="dropdown-divider"></div>

        <a href="{{ url('/admin/profile') }}" class="dropdown-item-custom">
            <i class="fa-regular fa-user"></i>
            <span>My Profile</span>
        </a>

        <a href="{{ url('/admin/settings') }}" class="dropdown-item-custom">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </a>

        <div class="dropdown-divider"></div>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf

            <button type="submit" class="dropdown-item-custom logout-item">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div>


        </div>
    </header>