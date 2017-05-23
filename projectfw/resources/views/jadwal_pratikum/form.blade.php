<div class="form-group">
	<label class="col-sm-2 control-label">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','placeholder'=>"Mahasiswa"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Aslab</label>
	<div class="col-sm-10">
		{!! Form::select('aslab_pratikum_id',$aslab_pratikum->listAslabdanMatakuliah(),null,['class'=>'form-control','placeholder'=>"Aslab"]) !!}
		</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','placeholder'=>"Ruangan"]) !!}
		</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Hari</label>
	<div class="col-sm-10">
		{!! Form::select('hari',array('senin'=>'senin','selasa'=>'selasa','rabu'=>'rabu','kamis'=>'kamis','jumat'=>'jumat'),null,['class'=>'form-control','placeholder'=>"Hari"]) !!}
		</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Jam</label>
	<div class="col-sm-10">
		{!! Form::time('jam',null,['class'=>'form-control']) !!}
		</div>
</div>