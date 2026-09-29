<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of buses.
     */
    public function index()
    {
        $buses = Bus::latest()->get();

        return view('admin.buses.index', compact('buses'));
    }

    /**
     * Show the form for creating a new bus.
     */
    public function create()
    {
        return view('admin.buses.create');
    }

    /**
     * Store a newly created bus.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bus_number' => 'required|string|max:255|unique:buses,bus_number',
            'bus_name' => 'nullable|string|max:255',
            'bus_type' => 'required|string|max:100',
            'total_seats' => 'required|integer|min:1',
            'status' => 'nullable|boolean',
        ]);

        $validated['status'] = $request->has('status');

        Bus::create($validated);

        return redirect()
            ->route('buses.index')
            ->with('success', 'Bus created successfully.');
    }

    /**
     * Display the specified bus.
     */
    public function show(Bus $bus)
    {
        return view('admin.buses.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified bus.
     */
    public function edit(Bus $bus)
    {
        return view('admin.buses.edit', compact('bus'));
    }

    /**
     * Update the specified bus.
     */
    public function update(Request $request, Bus $bus)
    {
        $validated = $request->validate([
            'bus_number' => 'required|string|max:255|unique:buses,bus_number,' . $bus->id,
            'bus_name' => 'nullable|string|max:255',
            'bus_type' => 'required|string|max:100',
            'total_seats' => 'required|integer|min:1',
            'status' => 'nullable|boolean',
        ]);

        $validated['status'] = $request->has('status');

        $bus->update($validated);

        return redirect()
            ->route('buses.index')
            ->with('success', 'Bus updated successfully.');
    }

    /**
     * Remove the specified bus.
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();

        return redirect()
            ->route('buses.index')
            ->with('success', 'Bus data deleted successfully.');
    }
}