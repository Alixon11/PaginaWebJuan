<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
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

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}" th:href="@{/css/index.css}">

</head>
<body>
    <div class="modal-dialog text-center">

        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="header">
                    <div class="logo-title">
                        <img src="/assets/images/logo-title.png" alt="">
                        <h2>B-Health</h2>
                    </div>
                    
                </div>
                <form class="col-12"  action="{{ url('admin') }}" method="post" id ="pla">
                     @csrf
                     <br>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo usuario" name="correo"/>
                    </div>
                    <div class="form-group" id="plan-group">
                         <select class="form-control" form="pla" name="planuser" id="planuser">
                            @for ($i = 0; $i < count($planes); $i++)
                             <option value="{{ $planes[$i]->id }}">{{ $planes[$i]->plan }} </option>
                            @endfor
                         </select>
                         
                    </div>                    

                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Acutualizar pago </button>
                </form>
                @if ($resultado)
                    <div class="alert alert-primary" role="alert">
                    Guardado correctamente

                    </div>
                    @endif

                <div class="col-12 forgot">
                    <a href="forgotpassword">Recordar contrasena?</a>
                </div>


            </div>
        </div>
    </div>
</body>
</html>