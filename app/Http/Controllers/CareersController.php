<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Careers;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $careers = Careers::all();
        return view('careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $career = new Career();
        $career->codigo = $request->codigo;
        $career->nombre = $request->nombre;
        $career->descripcion = $request->descripcion;
        $career->save();
        return redirect()->route('careers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $career = Career::find($id);
        return view('careers.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $career = Career::find($id);
        return view('careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $career = Career::find($id);
        $career->codigo = $request->codigo;
        $career->nombre = $request->nombre;
        $career->descripcion = $request->descripcion;
        $career->save();
        return redirect()->route('careers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
