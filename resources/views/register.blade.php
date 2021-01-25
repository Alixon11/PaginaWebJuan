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
            <div class="menu">
                <a href="login"><li class="module-login active">Login</li></a>
                <a href="register"><li class="register">Register</li></a>
            </div>
         </div>

        <form action="{{ url('register') }}" method="post" class="form">   
             @csrf   
             <div class="user line-input" id="user-group">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Completo" name="usuario">
            </div>     
            <div class="user line-input" id="mail">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input" id="edad">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Edad" name="edad">
            </div>
            <div class="user line-input" id="cel">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Número celular" name="cel">
            </div>
            <div class="password line-input" id="contrasena-group">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input"id="contrasena">
                <label class="lnr lnr-lock" ></label>
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrarse </button>               
        </form>
       <p>{{$msg}}</p>
    </div>

</body>
</html>
