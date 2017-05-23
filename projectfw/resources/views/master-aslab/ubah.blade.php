@extends('master-aslab')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('aslab') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Aslab</strong>
	</div>
		{!! Form::model($aslb,['files'=>true,'url'=>'aslab-ubah/edit/'.$aslb->id,'class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
		@include('master-aslab.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				
</div>
{!! Form::close() !!}
</div>

@stop