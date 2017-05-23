@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Aslab Mengajar</strong>
		<a href="{{url('aslab_pratikum/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">AslabPratikum</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Aslab</th>
			<th>Nama Matakuliah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaAslabPratikum as $aslab_pratikum)
		<td>{{ $x++ }}</td>
		<td>{{ $aslab_pratikum->aslab->nama or 'nama Kosong' }}</td>
		<td>{{ $aslab_pratikum->matakuliah->nama_mk or 'matakuliah Kosong' }}	</td>
		
		
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('aslab_pratikum/edit/'.$aslab_pratikum->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('aslab_pratikum/lihat/'.$aslab_pratikum->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('aslab_pratikum/hapus/'.$aslab_pratikum->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	