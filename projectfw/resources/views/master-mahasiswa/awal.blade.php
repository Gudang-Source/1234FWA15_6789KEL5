@extends('master-mahasiswa')
@section('container')
@foreach($mahasiswa as $mhs)
<div class="panel panel-danger">
	<div class="panel-heading">
	Data {{$mhs->nama }}</strong>
	</div>
	<table class="table">
		<tr>
			<td width="125" rowspan="6" align="center"><img src='{{ url("uploads/{$mhs->foto}") }} ' width="125" height="170"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $mhs->nama }}</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $mhs->nim }}</td>
		</tr>
		<tr>
			<td>alamat</td>
			<td>:</td>
			<td>{{ $mhs->alamat }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $mhs->pengguna->username }}</td>
		</tr>
		
		</tr>
	</table>

</div>
			
		@endforeach
		@stop
