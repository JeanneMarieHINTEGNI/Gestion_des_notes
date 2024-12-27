<?php

namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    public function index()
    {
        return view('ues.index', ['ues' => UE::all()]);
    }

    public function create()
    {
        return view('ues.create');
    }

    public function store(Request $request)
    {
        UE::create($request->validate([
            'code' => 'required|unique:u_es',
            'nom' => 'required',
            'ects' => 'required|integer',
            'semestre' => 'required|integer',
        ]));

        return redirect()->route('ues.index');
    }

    public function show(UE $ue)
    {
        return view('ues.show', compact('ue'));
    }

    public function edit(UE $ue)
    {
        return view('ues.edit', compact('ue'));
    }

    public function update(Request $request, UE $ue)
    {
        $ue->update($request->validate([
            'code' => 'required|unique:u_es,code,' . $ue->id,
            'nom' => 'required',
            'ects' => 'required|integer',
            'semestre' => 'required|integer',
        ]));

        return redirect()->route('ues.index');
    }

    public function destroy(UE $ue)
    {
        $ue->delete();
        return redirect()->route('ues.index');
    }
}
