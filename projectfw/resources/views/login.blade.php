<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LAB. PRAKTIKUM FKTI</title>
    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('komponen/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('komponen/assets/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('komponen/assets/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{asset('komponen/assets/css/style.css')}}">
    <style type="text/css">
        body{
            padding-top: 130px ;
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
    </style>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
                            
        
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
 
                            <div class="form-top" style="background-color:pink;">
                                <div class="form-top-left" style="background-color:pink;">
                                    <h3>Silahkan Login wal ae</h3>
                                    <p>masukan username dan password</p>
                                </div>
                                <div class="form-top-right" style="background-color:pink;">
                                    <img src="{{asset('component/logo.png')}}">
                                </div>
                            </div>
                            <div class="form-bottom" style="background-color:pink;">
                                <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn">Sign in!</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
</div>

    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    $(function(){
        $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
</body>
</html>