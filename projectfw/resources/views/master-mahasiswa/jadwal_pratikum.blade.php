@extends('master-mahasiswa')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Mahasiswa</th>
			<th>Nama Matakuliah</th>
			<th>Nama Aslab</th>
			<th>Hari</th>
			<th>Jam</th>
			<th>Ruangan</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaJadwalPratikum as $jadwal_pratikum)
		<td>{{ $x++ }}</td>
		<td>{{ $jadwal_pratikum->mahasiswa->nama or 'nama Kosong' }}</td>
		<td>{{ $jadwal_pratikum->aslab_pratikum->matakuliah->nama_mk or 'matakuliah Kosong' }}	</td>
		<td>{{ $jadwal_pratikum->aslab_pratikum->aslab->nama or 'matakuliah Kosong' }}	</td>
		<td>{{ $jadwal_pratikum->hari }}</td>
		<td>{{ $jadwal_pratikum->jam }}</td>
		<td>{{ $jadwal_pratikum->ruangan->title or 'nama Kosong' }}</td>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	