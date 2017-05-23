<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"NIM",'disabled'=>true]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',$aslb->pengguna->username,['class'=>'form-control','placeholder'=>"Username",'disabled'=>true]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" ></label>
	<div class="col-sm-10">
		{!! Form::hidden('level','aslab')!!}
		</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="foto">Foto</label>
		<div class="col-sm-10">
			{!! Form::file('foto',null,['class'=>'form-control']) !!}
		</div>
	</div>


