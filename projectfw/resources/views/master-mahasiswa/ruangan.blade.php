@extends('master-mahasiswa')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Ruangan</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>title</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $ruangan)
		<td>{{ $x++ }}</td>
		<td>{{ $ruangan->title or 'title Kosong' }}</td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	