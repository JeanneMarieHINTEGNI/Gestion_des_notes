<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\UE;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ECController extends Controller
{
    public function index()
    {
        $ecs = EC::with(['ue', 'teacher'])->get();
        return view('ecs.index', compact('ecs'));
    }

    public function create()
    {
        $ues = UE::all();
        $teachers = Teacher::all();
        return view('ecs.create', compact('ues', 'teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:ecs,code',
            'name' => 'required|string|max:255',
            'coefficient' => 'required|numeric|min:0',
            'ue_id' => 'required|exists:ues,id',
            'teacher_id' => 'nullable|exists:teachers,id',
        ]);

        EC::create($validated);

        return redirect()->route('ecs.index')->with('success', 'Élément Constitutif créé avec succès.');
    }
}
