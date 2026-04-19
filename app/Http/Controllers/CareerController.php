<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index() {
        $careers = Career::all();
        return view('careers.index', compact('careers'));
    }

    public function store(Request $request) {
        $request->validate(['nombre' => 'required|string|max:255']);
        Career::create($request->all());
        return back()->with('success', 'Carrera agregada correctamente.');
    }

    public function destroy(Career $career) {
        $career->delete();
        return back()->with('success', 'Carrera eliminada.');
    }
}