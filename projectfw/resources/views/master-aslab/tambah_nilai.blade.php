@extends('master-aslab')
@section('container')
<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{ url('nilai_aslab') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Jadwal Pratikum</strong>
	</div>
		{!! Form::model($jadwal_pratikum,['url'=>'tambah_nilai/edit/'.$jadwal_pratikum->id,'class'=>'form-horizontal  ']) !!}
		@include('master-aslab.form_nilai')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				
</div>
{!! Form::close() !!}
</div>

@stop