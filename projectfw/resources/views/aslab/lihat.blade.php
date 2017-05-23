@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('aslab') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Aslab</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $aslab->nama }}</td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $aslab->nim }}</td>
		</tr>
		
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $aslab->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $aslab->pengguna->password }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$aslab->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$aslab->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 