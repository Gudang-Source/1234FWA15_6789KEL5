@extends('master-dosen')
@section('container')
@foreach($dosen as $dsn)
		<table class="table">
			<tr>
			<td width="125" rowspan="6" align="center"><img src='{{ url("uploads/{$dsn->foto}") }} ' width="125" height="170"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $dsn->nama }}</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{ $dsn->nip }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $dsn->pengguna->username }}</td>
		</tr>
		
		</tr>
	</table>	
		@endforeach
		@stop
