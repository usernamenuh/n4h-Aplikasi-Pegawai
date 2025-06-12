<?php

namespace App\Http\Controllers;

use App\Models\bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index()
    {
        $bagian = bagian::all();
        return view('bagian.index', compact('bagian'));
    }

    public function show($id) {
        $bagian = bagian::findOrFail($id);
        return view('bagian.show', compact('bagian'));
    }
}
