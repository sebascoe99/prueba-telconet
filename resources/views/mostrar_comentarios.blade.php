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
                <div class="col-md-8"><h2 style="color: white">COMENTARIOS DEL USUARIO</h2></div>
                <div class="col-md-4">
                    <a href="{{ route('crearUsuario') }}"><button type="button" class="btn btn-success">Crear usuario</button></a>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <tbody>
                    @if( !empty($comentarios) )
                    @foreach($comentarios as $com)
                    <tr>
                        <td>{{ $com->comment_text }}</td>
                    </tr>
                    @endforeach
                    @else
                    <td>No hay comentarios de este usuario</td>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
