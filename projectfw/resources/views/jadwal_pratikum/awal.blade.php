@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{url('jadwal_pratikum/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Jadwalmatakuliah</i></a>
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
			<th>Aksi</th>
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
		
		
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('jadwal_pratikum/edit/'.$jadwal_pratikum->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('jadwal_pratikum/lihat/'.$jadwal_pratikum->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('jadwal_pratikum/hapus/'.$jadwal_pratikum->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	