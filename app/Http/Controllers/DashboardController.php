<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;
use Auth;

class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function interview()
  {
    return view('interview');
  }

  public function akun()
  {
    return view('akun');
  }

  public function kerja($id)
  {
    $lowongan = Lowongan::where('id', $id)->first();
    $user = Auth::user();
    // dd($lowongan);

    return view('kerjaid', compact(['lowongan'], ['user']));
  }

  public function lowongan_saya()
  {
    $user = Auth::user();
    $lowongan = Lowongan::all()->first();
    
    return view('lowongan-saya', compact(['lowongan'], ['user']));
  }

  public function tambah_lowongan()
  {
    return view('tambah-lowongan');
  }
  public function store_lowongan(Request $request)
  {
    // dd($request);
    // request()->validate([
    //   'judul' => 'required',
    //   'kategori' => 'required',
    //   // 'hari' => 'required',
    //   // 'jam' => 'required',
    //   'pendidikan' => 'required',
    //   'gaji' => 'required',
    //   'kelamin' => 'required',
    //   'deskripsi' => 'required',
    //   'kontak' => 'required',
    //   'foto' => 'required',
    //   'ijin' => 'required',
    // ]);

    $request->merge([
        'hari' => implode(', ', (array) $request->get('hari'))
    ]);

    $user = Auth::user();

    $lowongan = new Lowongan;
    $lowongan->user_id = $user->id;
    $lowongan->judul = $request->judul;
    $lowongan->kategori = $request->kategori;
    $lowongan->lokasi = $request->lokasi;
    $lowongan->hari = $request->hari;
    $lowongan->jam = $request->jam;
    $lowongan->pendidikan = $request->pendidikan;
    $lowongan->gaji = $request->gaji;
    $lowongan->kelamin = $request->kelamin;
    $lowongan->deskripsi = $request->deskripsi;
    $lowongan->kontak = $request->kontak;
    if( $request->hasFile('foto')) {
      $file = $request->file('foto');
      $ext = strtolower($file->getClientOriginalExtension());
      $Namagambar1 = time().'.'.$ext;
      $request->file('foto')->move(public_path('img/profil'), $Namagambar1);
      $lowongan->foto = $Namagambar1;

    }
    if( $request->hasFile('ijin')) {
      $file = $request->file('ijin');
      $ext = strtolower($file->getClientOriginalExtension());
      $Namagambar = time().'.'.$ext;
      $request->file('ijin')->move(public_path('img/ijin'), $Namagambar);
      $lowongan->ijin = $Namagambar;
    }

    $lowongan->save();

    return redirect('lowongan-saya')
                        ->with('success','Lowongan created successfully');
  }

  public function pelamar()
  {
    return view('pelamar');
  }
}
