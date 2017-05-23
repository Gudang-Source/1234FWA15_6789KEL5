@extends('master-aslab')
@section('container')
@foreach($aslab as $aslb)
	<table class="table">
		<tr>
			<td width="125" rowspan="6" align="center"><img src='{{ url("uploads/{$aslb->foto}") }} ' width="125" height="170"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $aslb->nama }}</td>
		</tr>	

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $aslb->nim }}</td>
		</tr>
		
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $aslb->pengguna->username }}</td>
		</tr>
		
	</table>
</div>
@endforeach
@stop 