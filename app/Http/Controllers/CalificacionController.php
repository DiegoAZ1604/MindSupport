<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CalificacionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $calificacions = Calificacion::paginate();

        return view('calificacion.index', compact('calificacions'))
            ->with('i', ($request->input('page', 1) - 1) * $calificacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $calificacion = new Calificacion();

        return view('calificacion.create', compact('calificacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CalificacionRequest $request): RedirectResponse
    {
        Calificacion::create($request->validated());

        return Redirect::route('calificacions.index')
            ->with('success', 'Calificacion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $calificacion = Calificacion::find($id);

        return view('calificacion.show', compact('calificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $calificacion = Calificacion::find($id);

        return view('calificacion.edit', compact('calificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CalificacionRequest $request, Calificacion $calificacion): RedirectResponse
    {
        $calificacion->update($request->validated());

        return Redirect::route('calificacions.index')
            ->with('success', 'Calificacion updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Calificacion::find($id)->delete();

        return Redirect::route('calificacions.index')
            ->with('success', 'Calificacion deleted successfully');
    }
}
