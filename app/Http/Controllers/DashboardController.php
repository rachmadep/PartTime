<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function interview()
  {
    return view('interview');
  }

  public function akun()
  {
    return view('akun');
  }

  public function lowongan_saya()
  {
    return view('lowongan-saya');
  }
}
