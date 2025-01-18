<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    public function index()
    {
        
        $ues = UE::all();

    
        return view('ues.index', compact('ues'));
    }
}

