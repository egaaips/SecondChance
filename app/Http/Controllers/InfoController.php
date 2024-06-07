<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function information()
    {
        $information = Information::orderBy('id', 'desc')->paginate(15);

        return view('informasi.informasi', compact('information'));
    }

    public function show($id)
    {
        $informations = Information::findOrFail($id);

        return view('informasi.show', compact('informations'));
    }

    public function showByLabel($label)
    {
        $information =Information::all();
        $informations = Information::where('label', $label)->orderBy('id', 'desc')->paginate(15);

        return view('informasi.showByLabel', compact('information', 'informations'));
    }
}
