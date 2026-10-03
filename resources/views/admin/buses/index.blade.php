
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Buses | Bus Booking</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f4f7fb;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: #17243b;
            padding: 28px 18px;
        }

        .brand {
            color: white;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .sidebar a {
            display: block;
            color: #cbd5e1;
            text-decoration: none;
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #2563eb;
            color: white;
        }

        .topbar {
            background: white;
            padding: 20px 30px;
            border-bottom: 1px solid #e2e8f0;
        }

        .content {
            padding: 32px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
        }

        .table-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 18px rgba(15, 23, 42, 0.04);
        }

        .table thead th {
            background: #f8fafc;
            color: #475569;
            font-size: 13px;
            text-transform: uppercase;
            padding: 16px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 17px 16px;
            vertical-align: middle;
        }

        .btn-primary {
            background: #2563eb;
            border-color: #2563eb;
            border-radius: 8px;
            padding: 11px 18px;
        }

        .btn-sm {
            border-radius: 6px;
        }

        .status-active {
            background: #dcfce7;
            color: #166534;
        }

        .status-inactive {
            background: #fee2e2;
            color: #991b1b;
        }

        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
                padding: 18px;
            }

            .brand {
                margin-bottom: 15px;
            }

            .content {
                padding: 18px 12px;
            }

            .table-card {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <aside class="col-md-3 col-lg-2 sidebar">
            <div class="brand">🚌 Bus Booking</div>

            <a href="/">Dashboard</a>
            <a href="{{ route('buses.index') }}" class="active">🚌 Buses</a>
            <a href="{{ route('routes.index') }}">🛣️ Routes</a>
            <a href="#">Trips</a>
            <a href="#">Bookings</a>
            <a href="#">Users</a>
        </aside>

        <main class="col-md-9 col-lg-10 px-0">

            <div class="topbar d-flex justify-content-between align-items-center">
                <div class="text-secondary">
                    Admin Panel / Buses
                </div>

                <div class="fw-semibold">👤 Admin</div>
            </div>

            <div class="content">

                <div class="d-flex justify-content-between align-items-center
                            flex-wrap gap-3 mb-4">

                    <div>
                        <h1 class="page-title mb-2">Bus Management</h1>
                        <p class="text-secondary mb-0">
                            Manage all buses registered in your system.
                        </p>
                    </div>

                    <a href="{{ route('buses.create') }}"
                       class="btn btn-primary">
                        + Add New Bus
                    </a>

                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div class="table-card">

                    <div class="d-flex justify-content-between
                                align-items-center mb-4">

                        <h5 class="fw-bold mb-0">All Buses</h5>

                        <span class="badge text-bg-primary">
                            Total: {{ $buses->count() }}
                        </span>

                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bus Number</th>
                                    <th>Bus Name</th>
                                    <th>Bus Type</th>
                                    <th>Total Seats</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($buses as $bus)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td class="fw-semibold">
                                            {{ $bus->bus_number }}
                                        </td>

                                        <td>
                                            {{ $bus->bus_name ?? 'N/A' }}
                                        </td>

                                        <td>
                                            <span class="badge text-bg-light border">
                                                {{ $bus->bus_type }}
                                            </span>
                                        </td>

                                        <td>{{ $bus->total_seats }}</td>

                                        <td>
                                            @if ($bus->status)
                                                <span class="badge status-active rounded-pill px-3 py-2">
                                                    Active
                                                </span>
                                            @else
                                                <span class="badge status-inactive rounded-pill px-3 py-2">
                                                    Inactive
                                                </span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="d-flex gap-2">

                                                <a href="{{ route('buses.show', $bus) }}"
                                                   class="btn btn-sm btn-outline-primary">
                                                    View
                                                </a>

                                                <a href="{{ route('buses.edit', $bus) }}"
                                                   class="btn btn-sm btn-outline-secondary">
                                                    Edit
                                                </a>

                                                <form
                                                    action="{{ route('buses.destroy', $bus) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this bus?')"
                                                >
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-sm btn-outline-danger">
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="7" class="text-center py-5">

                                            <div class="fs-1 mb-3">🚌</div>

                                            <h5 class="fw-bold">
                                                No Buses Found
                                            </h5>

                                            <p class="text-secondary">
                                                Start by adding your first bus.
                                            </p>

                                            <a href="{{ route('buses.create') }}"
                                               class="btn btn-primary">
                                                + Add Your First Bus
                                            </a>

                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>
                </div>

            </div>
        </main>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>