@extends('master-mahasiswa')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('mahasiswa') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Mahasiswa</strong>
	</div>
		{!! Form::model($mhs,['files'=>true,'url'=>'mahasiswa-ubah/edit/'.$mhs->id,'class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
		@include('master-mahasiswa.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				
{!! Form::close() !!}
</div>

@stop