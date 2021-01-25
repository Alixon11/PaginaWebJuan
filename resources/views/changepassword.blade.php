<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Register </title>    
    <meta name="viewport csrf-token" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, 
    minimum-scale=1.0, {{ csrf_token() }}">




    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
    
</head>
<body>
    
    <div class="container-form text-center">
        <div class="header">
            <div class="logo-title">
                <img src="/assets/images/logo-title.png" alt="">
                <h2>B-Health</h2>
            </div>
         </div>

        <form action="{{ url('changepassword') }}" method="post" class="form">   
             @csrf   

            <div class="password line-input" id="contrasena-group">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Nueva contraseña" name="newclave">
            </div>
            <div class="password line-input" id="contrasena-group">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confimar contraseña" name="newclave1">
            </div>
            <input type="hidden" value="{{$email}}" placeholder="Confimar contraseña" name="correo">

            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Cambiar contraseña </button>  

        </form>
        @if ($resultado!="")
                    <div class="alert alert-primary" role="alert">
                    {{$resultado}}
                    </div>
                    @endif        
                    <a href="login">Inicio</a>

    </div>

</body>
</html>