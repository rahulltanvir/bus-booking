```blade
@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1">Bus Details</h2>
            <p class="text-muted mb-0">Complete information about this bus</p>
        </div>

        <div>
            <a href="{{ route('buses.index') }}" class="btn btn-secondary">
                ← Back
            </a>

            <a href="{{ route('buses.edit', $bus) }}" class="btn btn-primary">
                Edit Bus
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Bus Information</h5>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Bus Number</strong>
                </div>

                <div class="col-md-8">
                    {{ $bus->bus_number }}
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Bus Name</strong>
                </div>

                <div class="col-md-8">
                    {{ $bus->bus_name ?? 'N/A' }}
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Bus Type</strong>
                </div>

                <div class="col-md-8">
                    {{ $bus->bus_type }}
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Total Seats</strong>
                </div>

                <div class="col-md-8">
                    {{ $bus->total_seats }}
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Status</strong>
                </div>

                <div class="col-md-8">
                    @if($bus->status)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Created At</strong>
                </div>

                <div class="col-md-8">
                    {{ $bus->created_at->format('d M Y, h:i A') }}
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-4">
                    <strong>Last Updated</strong>
                </div>

                <div class="col-md-8">
                    {{ $bus->updated_at->format('d M Y, h:i A') }}
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
```
