<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\Captcha;
use App\Volun;


class BerandaController extends Controller
{
    public function volun(Request $request)
{
    $foto = $request->file('foto');
    $nama_file = time()."_".$foto->getClientOriginalName();
    $tujuan_upload = 'foto_volun';
    $foto->move($tujuan_upload,$nama_file);
    Volun::create([
        'nama_lengkap' => $request->nama_lengkap,
		'email' => $request->email,
		'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
        'instansi' => $request->instansi,
        'alasan' => $request->alasan,
        'tempat' => $request->tempat,
        'pengalaman' => $request->pengalaman,
        'alergi' => $request->alergi,
        'riwayat_penyakit' => $request->riwayat_penyakit, 
        'foto' => $nama_file
    ]);
	return redirect()->back();
}
public function beranda()
{
    $pro = DB::table('profile')->paginate(4);
    return view('beranda',['profile' => $pro]);
}

}
