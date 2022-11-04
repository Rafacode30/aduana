<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('packages.index');
    }

    public function packages()
    {
        $respuesta = Package::orderBy('id', 'desc')->limit(110)->get();

        return response()->json($respuesta);
    }
}
