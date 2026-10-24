
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | BusBooking</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/jpeg" href="{{ asset('bus-logo.jpeg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

{{-- sidebar --}}
 @include('admin.includes.sidebar')
{{-- sidebar end --}}

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<main class="main">
    {{-- topbar --}}
@include('admin.includes.header')
    {{-- topbar end --}}

    <section class="content">

       @yield('body')

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
