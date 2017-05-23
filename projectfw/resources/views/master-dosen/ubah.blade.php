@extends('master-dosen')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('dosen') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Dosen</strong>
	</div>
		{!! Form::model($dsn,['files'=>true,'url'=>'dosen-ubah/edit/'.$dsn->id,'class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
		@include('master-dosen.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				
</div>
{!! Form::close() !!}
</div>

@stop