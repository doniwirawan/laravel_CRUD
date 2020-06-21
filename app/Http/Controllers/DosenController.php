<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
		public function index(){
			$nama = 'Doni Wirawan';
			$pelajaran  = ["matematika","ipa","ips"];
			return view('biodata',['nama' => $nama,'matkul' => $pelajaran]);
		}																																									
}
