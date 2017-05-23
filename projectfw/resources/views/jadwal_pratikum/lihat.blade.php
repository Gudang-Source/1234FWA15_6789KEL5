@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('jadwal_pratikum') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Jadwal Pratikum</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwal_pratikum->mahasiswa->nama }}</td>
		</tr>

		<tr>
			<td>Nama Aslab</td>
			<td>:</td>
			<td>{{ $jadwal_pratikum->aslab_pratikum->aslab->nama }}</td>
		</tr>
		<tr>
			<td>Matakuliah</td>
			<td>:</td>
			<td>{{ $jadwal_pratikum->aslab_pratikum->matakuliah->nama_mk }}</td>
		</tr>
		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td>{{ $jadwal_pratikum->ruangan->title }}</td>
		</tr>
		<tr>
			<td>Hari</td>
			<td>:</td>
			<td>{{ $jadwal_pratikum->hari }}</td>
		</tr>
		<tr>
			<td>Jam</td>
			<td>:</td>
			<td>{{ $jadwal_pratikum->jam}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal_pratikum->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal_pratikum->updated_at }}</td>
		</tr>
	</table>
</div>
@stop