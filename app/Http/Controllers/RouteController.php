<?php

namespace App\Http\Controllers;

use App\Models\Route as BusRoute;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes = BusRoute::latest()->get();

        return view('admin.routes.index', compact('routes'));
    }

    public function create()
    {
        return view('admin.routes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
        ]);

        BusRoute::create($request->only('from', 'to'));

        return redirect()
            ->route('routes.index')
            ->with('success', 'Route added successfully.');
    }

    public function show(BusRoute $route)
    {
        return view('admin.routes.show', compact('route'));
    }

    public function edit(BusRoute $route)
    {
        return view('admin.routes.edit', compact('route'));
    }

    public function update(Request $request, BusRoute $route)
    {
        $request->validate([
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
        ]);

        $route->update($request->only('from', 'to'));

        return redirect()
            ->route('routes.index')
            ->with('success', 'Route updated successfully.');
    }

    public function destroy(BusRoute $route)
    {
        $route->delete();

        return redirect()
            ->route('routes.index')
            ->with('success', 'Route deleted successfully.');
    }
}