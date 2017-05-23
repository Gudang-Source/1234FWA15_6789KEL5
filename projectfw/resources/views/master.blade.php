<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">		
	<title>@yield('page_tittle','LAB. PRAKTIKUM FKTI')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<link href="{{asset('baru/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('baru/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('baru/css/styles.css')}}" rel="stylesheet">
	<script src="{{asset('baru/js/lumino.glyphs.js')}}"></script>
	<style type="text/css">
		body{
			padding-top: auto ;
			padding-bottom: 70px;
		}
		.starter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
		}
		footer{
			padding-top: 15px;
			text-align: right;
		}
		.navbar-inverse{
			background-color: maroon;
		}
		.container{
			padding-top: 50px;
			padding-left: 150px;
		}
	</style>
</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('master')}}"><span><i class="glyphicon glyphicon-home"></i>Laboratorium</span>TI</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Data Mahasiswa </span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="{{url('mahasiswa')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Mahasiswa
						</a>
					</li>
					<li>
						<a class="" href="{{url('jadwal_pratikum')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Jadwal Pratikum Mahasiswa
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Data Aslab </span> 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="{{url('aslab')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Aslab
						</a>
					</li>
					<li>
						<a class="" href="{{url('aslab_pratikum')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Aslab dan Matakuliah
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Data Dosen </span> 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="{{url('dosen')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Dosen
						</a>
					</li>
					<li>
						<a class="" href="{{url('dosen_matakuliah')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Dosen Matakuliah
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Pengaturan </span> 
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="{{url('ruangan')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Ruangan
						</a>
					</li>
					<li>
						<a class="" href="{{url('matakuliah')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Matakuliah
						</a>
					</li>
					<li>
						<a class="" href="{{url('admin')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Admin
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="{{url('logout')}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
		</ul>
		<!-- <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div> -->
	</div><!--/.sidebar-->
		
		
				
		
		
		
	</div><!--/.main-->

	<div class="clearfix"></div>
	<div class="container">
		@if (Session::has('informasi'))
		<div class="alert alert-info">
			<strong>Informasi: </strong>{{Session::get('informasi')}}
		</div>
		@endif	

		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
		@endif

		@yield('container')
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<footer class="container">
			created by <a href=""><span><i class="glyphicon glyphicon-user" style="color:black"></i>Kelompok 5</span></a>
		</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
	$(function(){
		$('[data-toggle="tooltip"]').tooltip()
	});
	</script>


</body>
</html>