@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Aslab</strong>
		<a href="{{url('aslab/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Aslab</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaAslab as $aslab)
		<td>{{ $x++ }}</td>
		<td>{{ $aslab->nama or 'nama Kosong' }}</td>
		<td>{{ $aslab->nim or 'nim Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('aslab/edit/'.$aslab->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('aslab/lihat/'.$aslab->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('aslab/hapus/'.$aslab->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	