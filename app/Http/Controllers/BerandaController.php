<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index() {
    $data = [
        'title' => 'Beranda'
    ];
    return view('pengunjung.v_beranda', $data);
    }
}

