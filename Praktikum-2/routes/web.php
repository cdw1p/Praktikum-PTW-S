<?php

use Illuminate\Support\Facades\Route;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Ruangan;
use App\Models\Kelas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('0333_home');
});

Route::get('/exampleSelect', function () {
    $query = Guru::select('nip', 'nama_guru', 'kelamin', 'telpon_guru')->get();
    return view('0333_exampleSelect', ['data' => $query]);
});

Route::get('/exampleSelectWhere', function () {
    $query = Guru::select('nip', 'nama_guru', 'kelamin', 'telpon_guru')->where('nip', '111112')->get();
    return view('0333_exampleSelectWhere', ['data' => $query]);
});

Route::get('/exampleSelectJoin', function () {
    $query = Ruangan::select('nama_siswa', 'nis', 'kelamin', 'alamat_siswa', 'nama_kelas')
                ->join('data_siswa', 'tbl_ruangan.id_siswa', '=', 'data_siswa.id_siswa')
                ->join('setup_kelas', 'tbl_ruangan.id_kelas', '=', 'setup_kelas.id_kelas')
                ->get();
    return view('0333_exampleSelectJoin', ['data' => $query]);
});

Route::get('/exampleSelectJoinLike', function () {
    $query = Ruangan::select('nama_siswa', 'nis', 'kelamin', 'alamat_siswa', 'nama_kelas')
                ->join('data_siswa', 'tbl_ruangan.id_siswa', '=', 'data_siswa.id_siswa')
                ->join('setup_kelas', 'tbl_ruangan.id_kelas', '=', 'setup_kelas.id_kelas')
                ->where('data_siswa.alamat_siswa', 'LIKE', '%Jakarta%')
                ->get();
    return view('0333_exampleSelectJoinLike', ['data' => $query]);
});
