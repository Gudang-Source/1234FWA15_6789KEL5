@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('mahasiswa') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Aslab</strong>
	</div>
		{!! Form::model($aslab,['url'=>'aslab/edit/'.$aslab->id,'class'=>'form-horizontal  ']) !!}
		@include('aslab.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset"class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop