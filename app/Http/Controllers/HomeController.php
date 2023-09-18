<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        $berita = Berita::paginate(5);
        return view('home', compact('berita'));
    }
    
}
