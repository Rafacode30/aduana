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
        $datos = Package::all();

        return response()->json($datos);
    }
}
