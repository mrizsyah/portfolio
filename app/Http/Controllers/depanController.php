<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halamanabout');
        $about_data = halaman::where('id', $about_id)->first();
        
        $interest_id = get_meta_value('_halamaninterest');
        $interest_data = halaman::where('id', $interest_id)->first();
        
        $award_id = get_meta_value('_halamanawards');
        $award_data = halaman::where('id', $award_id)->first();

        $experience_data = riwayat::where('tipe', 'experience')->get();
        $education_data = riwayat::where('tipe', 'education')->get();
        // $skill_data = riwayat::where('tipe', '')->get();

        return view('depan.index')->with([
            'about' =>$about_data,
            'interest' =>$interest_data,
            'award' => $award_data,
            'experience' => $experience_data,
            'education' => $education_data
        ]);

    }    
}
