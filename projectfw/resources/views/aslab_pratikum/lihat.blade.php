@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('aslab_pratikum') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Aslab Pratikum</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Aslab</td>
			<td>:</td>
			<td>{{ $aslab_pratikum->aslab->nama  }}</td>
		</tr>

		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{ $aslab_pratikum->matakuliah->nama_mk }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$aslab_pratikum->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$aslab_pratikum->updated_at }}</td>
		</tr>
	</table>
</div>
@stop