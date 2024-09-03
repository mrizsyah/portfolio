<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    function index ()
    {
        $datahalaman = halaman::orderBy('judul', 'asc')->get();
        return view("dashboard.pengaturanhalaman.index")->with('datahalaman', $datahalaman);
    }

    function update (Request $request)
    {
        metadata::updateOrCreate(['meta_key' => '_halamanabout'],
        ['meta_value' => $request->_halamanabout]);
        metadata::updateOrCreate(['meta_key' => '_halamaninterest'],
        ['meta_value' => $request->_halamaninterest]);
        metadata::updateOrCreate(['meta_key' => '_halamanawards'],
        ['meta_value' => $request->_halamanawards]);

        return redirect()->route('pengaturanhalaman.index')->with('success','Berhasil Update Pengaturan Halaman');
    }
}
