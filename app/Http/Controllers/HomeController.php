<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Lowongan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      $lowongan = Lowongan::all()->first();
      // $lowongan = Lowongan::where('judul', 'pattern')->first();
      // dd($lowongan);
        return view('home', compact(['lowongan'], ['user']));
    }

    public function index1()
    {
        return view('home1');
    }

    public function index2()
    {
        return view('home2');
    }

    public function search()
    {
        return view('search');
    }

    public function Kerja()
    {
        return view('kerja');
    }
}
