<?php

namespace App\Http\Controllers;

use App\Models\ContenidoEdu;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContenidoEduRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ContenidoEduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $contenidoEdu = ContenidoEdu::paginate();

        return view('contenido-edu.index', compact('contenidoEdu'))
            ->with('i', ($request->input('page', 1) - 1) * $contenidoEdu->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $contenidoEdu = new ContenidoEdu();
        $users = User::all();

        return view('contenido-edu.create', compact('contenidoEdu', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContenidoEduRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('Contenido')) {
            $file = $request->file('Contenido');
            $filePath = $file->store('public'); // Use only 'public' for storage

            $data['Contenido'] = $filePath;
        }

        ContenidoEdu::create($data);

        return Redirect::route('contenido-edu.index')
            ->with('success', 'ContenidoEdu created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $contenidoEdu = ContenidoEdu::find($id);

        return view('contenido-edu.show', compact('contenidoEdu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $contenidoEdu = ContenidoEdu::find($id);

        return view('contenido-edu.edit', compact('contenidoEdu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContenidoEduRequest $request, ContenidoEdu $contenidoEdu): RedirectResponse
    {
        $contenidoEdu->update($request->validated());

        return Redirect::route('contenido-edu.index')
            ->with('success', 'ContenidoEdu updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ContenidoEdu::find($id)->delete();

        return Redirect::route('contenido-edu.index')
            ->with('success', 'ContenidoEdu deleted successfully');
    }
}
