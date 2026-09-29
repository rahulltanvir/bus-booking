
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Bus | Bus Booking</title>

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

        .sidebar a.active,
        .sidebar a:hover {
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

        .form-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 30px;
            box-shadow: 0 4px 18px rgba(15, 23, 42, 0.04);
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 9px;
        }

        .form-control,
        .form-select {
            min-height: 48px;
            border-color: #d5deeb;
            border-radius: 8px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .12);
        }

        .btn-primary {
            background: #2563eb;
            border-color: #2563eb;
            padding: 12px 24px;
            border-radius: 8px;
        }

        .btn-light {
            border: 1px solid #d5deeb;
            padding: 12px 20px;
            border-radius: 8px;
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

            .form-card {
                padding: 20px;
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
            <a href="#">Routes</a>
            <a href="#">Trips</a>
            <a href="#">Bookings</a>
            <a href="#">Users</a>
        </aside>

        <main class="col-md-9 col-lg-10 px-0">

            <div class="topbar d-flex justify-content-between align-items-center">
                <div class="text-secondary">
                    Admin Panel / Buses / Edit Bus
                </div>

                <div class="fw-semibold">👤 Admin</div>
            </div>

            <div class="content">

                <div class="form-card">

                    <div class="mb-4 pb-4 border-bottom">
                        <h1 class="page-title mb-2">Edit Bus</h1>

                        <p class="text-secondary mb-0">
                            Update the information for this bus.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('buses.update', $bus) }}"
                          method="POST">

                        @csrf
                        @method('PUT')

                        <div class="row g-4">

                            <div class="col-md-6">
                                <label for="bus_number" class="form-label">
                                    Bus Number *
                                </label>

                                <input
                                    type="text"
                                    id="bus_number"
                                    name="bus_number"
                                    class="form-control"
                                    value="{{ old('bus_number', $bus->bus_number) }}"
                                    required
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="bus_name" class="form-label">
                                    Bus Name
                                </label>

                                <input
                                    type="text"
                                    id="bus_name"
                                    name="bus_name"
                                    class="form-control"
                                    value="{{ old('bus_name', $bus->bus_name) }}"
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="bus_type" class="form-label">
                                    Bus Type *
                                </label>

                                <select
                                    id="bus_type"
                                    name="bus_type"
                                    class="form-select"
                                    required
                                >
                                    <option value="AC"
                                        {{ old('bus_type', $bus->bus_type) == 'AC' ? 'selected' : '' }}>
                                        AC
                                    </option>

                                    <option value="Non-AC"
                                        {{ old('bus_type', $bus->bus_type) == 'Non-AC' ? 'selected' : '' }}>
                                        Non-AC
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="total_seats" class="form-label">
                                    Total Seats *
                                </label>

                                <input
                                    type="number"
                                    id="total_seats"
                                    name="total_seats"
                                    class="form-control"
                                    min="1"
                                    value="{{ old('total_seats', $bus->total_seats) }}"
                                    required
                                >
                            </div>

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input
                                        type="checkbox"
                                        id="status"
                                        name="status"
                                        value="1"
                                        class="form-check-input"
                                        role="switch"
                                        {{ old('status', $bus->status) ? 'checked' : '' }}
                                    >

                                    <label for="status"
                                           class="form-check-label fw-semibold">
                                        Active Status
                                    </label>
                                </div>

                                <small class="text-secondary">
                                    Turn off to mark this bus as inactive.
                                </small>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between align-items-center
                                    gap-3 flex-wrap mt-5 pt-4 border-top">

                            <a href="{{ route('buses.index') }}"
                               class="btn btn-light">
                                ← Back to Bus List
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Update Bus
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </main>

    </div>
</div>

</body>
</html>