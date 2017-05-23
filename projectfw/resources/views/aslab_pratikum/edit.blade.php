@extends('master')
@section('container')
<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{ url('aslabpratikum') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui aslab pratikum</strong>
	</div>
		{!! Form::model($aslab_pratikum,['url'=>'aslab_pratikum/edit/'.$aslab_pratikum->id,'class'=>'form-horizontal  ']) !!}
		@include('aslab_pratikum.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset"class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop