<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <hr>
        <div class="container">
            <div class="row mx-md-n5" style="padding: 10px; background-color:#1C2464">
                <div class="col-md-8"><h2 style="color: white">ADMINISTRAR USUARIOS</h2></div>
                <div class="col-md-4"><button type="button" class="btn btn-success">Crear usuario</button></div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Guayaquil</td>
                        <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
