@extends('master-mahasiswa')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Dosen Mengajar</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen</th>
			<th>Nama Matakuliah</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaDosenMatakuliah as $dosen_matakuliah)
		<td>{{ $x++ }}</td>
		<td>{{ $dosen_matakuliah->dosen->nama or 'nama Kosong' }}</td>
		<td>{{ $dosen_matakuliah->matakuliah->nama_mk or 'matakuliah Kosong' }}	</td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	