<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengalamanKerja; // Pastikan model yang digunakan benar

class PendidikanController extends Controller
{
public function index()
{
$pengalaman_kerja = PengalamanKerja::all(); // Ambil semua data dari tabel pengalaman_kerja
return view('backend.pendidikan.index', compact('pengalaman_kerja'));
}
}
