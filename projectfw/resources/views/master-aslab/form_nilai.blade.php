<div class="form-group">
	<label class="col-sm-2 control-label">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','placeholder'=>"Mahasiswa",'readonly']) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Aslab</label>
	<div class="col-sm-10">
		{!! Form::select('aslab_pratikum_id',$aslab_pratikum->listAslabdanMatakuliah(),null,['class'=>'form-control','placeholder'=>"Aslab",'readonly']) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nilai</label>
	<div class="col-sm-10">
		{!! Form::text('nilai',null,['class'=>'form-control','placeholder'=>"Nilai"]) !!}
		</div>
</div>