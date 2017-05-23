<div class="form-group">
	<label class="col-sm-2 control-label">Aslab</label>
	<div class="col-sm-10">
		{!! Form::select('aslab_id',$aslab->listAslabDanNim(),null,['class'=>'form-control','placeholder'=>"Aslab"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id',$matakuliah->lists('nama_mk','id'),null,['class'=>'form-control','placeholder'=>"Matakuliah"]) !!}
		</div>
</div>
