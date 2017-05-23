@extends('master-mahasiswa')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Aslab Mengajar</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Aslab</th>
			<th>Nama Matakuliah</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaAslabPratikum as $aslab_pratikum)
		<td>{{ $x++ }}</td>
		<td>{{ $aslab_pratikum->aslab->nama or 'nama Kosong' }}</td>
		<td>{{ $aslab_pratikum->matakuliah->nama_mk or 'matakuliah Kosong' }}	</td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	