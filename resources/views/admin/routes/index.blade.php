@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

```
<div class="topbar d-flex justify-content-between align-items-center mb-4">
    <div class="text-secondary">
        Admin Panel / Routes
    </div>

    <a href="{{ route('routes.create') }}" class="btn btn-primary">
        + Add Route
    </a>
</div>

<div class="card">
    <div class="card-body">

        <h4 class="mb-4">Routes</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($routes->count() > 0)

            <div class="table-responsive">
                <table class="table table-bordered align-middle">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Distance</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($routes as $route)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $route->from }}</td>

                                <td>{{ $route->to }}</td>

                                <td>{{ $route->distance ?? '-' }}</td>

                                <td>{{ $route->duration ?? '-' }}</td>

                                <td>

                                    <a href="{{ route('routes.show', $route->id) }}"
                                       class="btn btn-sm btn-info">
                                        View
                                    </a>

                                    <a href="{{ route('routes.edit', $route->id) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('routes.destroy', $route->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this route?')">
                                            Delete
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>

        @else

            <div class="text-center py-5">
                <h5>No routes found</h5>

                <p class="text-muted">
                    No bus routes have been added yet.
                </p>

                <a href="{{ route('routes.create') }}"
                   class="btn btn-primary">
                    + Add Route
                </a>
            </div>

        @endif

    </div>
</div>
```

</div>

@endsection
