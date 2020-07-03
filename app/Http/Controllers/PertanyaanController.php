<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pertanyaan;

class PertanyaanController extends Controller
{
     public function index()
    {
    	// mengambil data pegawai
    	$pertanyaan = Pertanyaan::all();

    	// mengirim data pegawai ke view pegawai
    	return view('index', ['pertanyaan' => $pertanyaan]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'judul' => 'required',
    		'isi' => 'required'
    	]);
 
        Pertanyaan::create([
    		'judul' => $request->judul,
    		'isi' => $request->isi
    	]);
 
    	return redirect('/pertanyaan');
    }

}
