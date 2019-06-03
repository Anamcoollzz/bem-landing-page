<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class HomeController extends Controller
{
    public function index()
    {
    	$artikel_terbaru = Artikel::latest()->take(3)->get();
    	return view('beranda', [
    		'artikel_terbaru'		=> $artikel_terbaru,
    	]);
    }
}
