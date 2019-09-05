<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama   = 'Dhea Aria Rachman';
        $materi = ['Web Design', 'Web Programming', 'Web Dasar'];
        return view('biodata', ['nama' => $nama, 'materi' => $materi]);
    }
}
