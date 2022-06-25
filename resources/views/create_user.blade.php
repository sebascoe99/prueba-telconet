<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <hr>
        <div class="container">
            <div class="row" style="padding: 10px; background-color:#198754">
                <div class="col-md-8"><h2 style="color: white">CREAR USUARIOS</h2></div>
            </div>
            <hr>
            <div class="row">
                <form class="myForm" id="myForm" method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label id="name" name="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label id="apellido" name="apellido" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label id="correo" name="correo" class="col-sm-2 col-form-label">Correo</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" placeholder="email@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label id="contrasenia" name="contrasenia" class="col-sm-2 col-form-label">Contraseña</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label id="repetir_contrasenia" name="repetir_contrasenia" class="col-sm-2 col-form-label">Repita su contraseña</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success" id="crear" name="crear">Crear</button>
                </form>
            </div>
        </div>
    </body>
</html>
