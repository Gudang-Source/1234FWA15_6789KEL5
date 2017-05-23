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

<!--Icons-->
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
				<a class="navbar-brand" href="{{url('master-dosen')}}"><span><i class="glyphicon glyphicon-home"></i>Laboratorium</span>TI</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> @foreach($dosen as $dsn) {{$dsn->nama}} @endforeach <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{url('dosen-ubah/edit/'.$dsn->id)}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="{{url('/jadwal_dosen')}}"><svg class="glyph stroked list"><use xlink:href="#stroked-dashboard-dial"></use></svg> Jadwal Dosen</a></li>
							<li><a href="{{url('/logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			
			<li><a href="{{url('aslab_dosen')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Data Aslab</a></li>
			<li><a href="{{url('dosen_dosen')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Data Dosen</a></li>
			<li><a href="{{url('ruangan_dosen')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Data Ruangan</a></li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->	
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