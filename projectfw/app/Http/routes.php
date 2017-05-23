<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/tes',function(){
	return view('welcome');
});
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');


Route::get('/master', function () {
    return view('master');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('kontak');
});


// ruangan
Route::group(['middleware'=>'admin'],function(){
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');

// matakuliah
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');

//mahasiswa
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

// dosen
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');

//aslab
Route::get('aslab','AslabController@awal');
Route::get('aslab/tambah','AslabController@tambah');
Route::post('aslab/simpan','AslabController@simpan');
Route::get('aslab/edit/{aslab}','AslabController@edit');
Route::post('aslab/edit/{aslab}','AslabController@update');
Route::get('aslab/hapus/{aslab}','AslabController@hapus');
Route::get('aslab/lihat/{aslab}','AslabController@lihat');

//admin
Route::get('admin','AdminController@awal');
Route::get('admin/tambah','AdminController@tambah');
Route::post('admin/simpan','AdminController@simpan');
Route::get('admin/edit/{admin}','AdminController@edit');
Route::post('admin/edit/{admin}','AdminController@update');
Route::get('admin/hapus/{admin}','AdminController@hapus');
Route::get('admin/lihat/{admin}','AdminController@lihat');

//dosenmatakuliah
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::post('dosen_matakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');

//aslabpratikum
Route::get('aslab_pratikum','Aslab_PratikumController@awal');
Route::get('aslab_pratikum/tambah','Aslab_PratikumController@tambah');
Route::post('aslab_pratikum/simpan','Aslab_PratikumController@simpan');
Route::get('aslab_pratikum/edit/{aslab_pratikum}','Aslab_PratikumController@edit');
Route::post('aslab_pratikum/edit/{aslab_pratikum}','Aslab_PratikumController@update');
Route::get('aslab_pratikum/hapus/{aslab_pratikum}','Aslab_PratikumController@hapus');
Route::get('aslab_pratikum/lihat/{aslab_pratikum}','Aslab_PratikumController@lihat');

//jadwalpratikum
Route::get('jadwal_pratikum','Jadwal_PratikumController@awal');
Route::get('jadwal_pratikum/tambah','Jadwal_PratikumController@tambah');
Route::post('jadwal_pratikum/simpan','Jadwal_PratikumController@simpan');
Route::get('jadwal_pratikum/edit/{jadwal_pratikum}','Jadwal_PratikumController@edit');
Route::post('jadwal_pratikum/edit/{jadwal_pratikum}','Jadwal_PratikumController@update');
Route::get('jadwal_pratikum/hapus/{jadwal_pratikum}','Jadwal_PratikumController@hapus');
Route::get('jadwal_pratikum/lihat/{jadwal_pratikum}','Jadwal_PratikumController@lihat');
});

//master-mahasiswa
Route::group(['middleware'=>'mahasiswa'],function(){
Route::get('/master-mahasiswa','MmahasiswaController@mahasiswa');
Route::get('mahasiswa-ubah/edit/{mahasiswa}','MmahasiswaController@edit_mhs');
Route::post('mahasiswa-ubah/edit/{mahasiswa}','MmahasiswaController@update_mhs');
Route::get('jadwal_pratikum_mahasiswa','MmahasiswaController@jadwal_pratikum_mhs');
Route::get('aslab_mahasiswa','MmahasiswaController@aslab_mhs');
Route::get('dosen_mahasiswa','MmahasiswaController@dosen_mhs');
Route::get('ruangan_mahasiswa','MmahasiswaController@ruangan_mhs');
Route::get('nilai_mahasiswa','MmahasiswaController@nilai_mhs');

});

//master-aslab
Route::group(['middleware'=>'aslab'],function(){
Route::get('/master-aslab','MaslabController@aslab');
Route::get('ruangan_aslab','MaslabController@ruangan_aslb');
Route::get('dosen_aslab','MaslabController@dosen_aslb');
Route::get('jadwal_pratikum_aslab','MaslabController@jadwal_pratikum_aslb');
Route::get('nilai_aslab','MaslabController@nilai_pratikum_aslb');
Route::get('tambah_nilai/edit/{jadwal_pratikum}','MaslabController@edit_nilai');
Route::post('tambah_nilai/edit/{jadwal_pratikum}','MaslabController@update_nilai');
Route::get('aslab_aslab','MaslabController@aslab_aslb');
Route::get('aslab-ubah/edit/{aslb}','MaslabController@edit_aslb');
Route::post('aslab-ubah/edit/{aslb}','MaslabController@update_aslb');
});


//master-dosen
Route::group(['middleware'=>'dosen'],function(){
Route::get('/master-dosen','MdosenController@dosen');
Route::get('dosen_dosen','MdosenController@dosen_dsn');
Route::get('jadwal_dosen','MdosenController@dosen_matakuliah_dsn');
Route::get('ruangan_dosen','MdosenController@ruangan_dsn');
Route::get('aslab_dosen','MdosenController@aslab_dsn');
Route::get('dosen-ubah/edit/{dsn}','MdosenController@edit_dsn');
Route::post('dosen-ubah/edit/{dsn}','MdosenController@update_dsn');
});

//master about
Route::get('about', function(){
	return view ('about');
});




