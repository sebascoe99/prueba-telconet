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
                <div class="col-md-8"><h2 style="color: white">NUMERO PRIMO</h2></div>
            </div>
            <div class="row mx-md-n5">
                <label for="fname">Número:</label>
                <input type="text" id="numero" name="numero"><br><br>
            </div>
            <br>
            <div class="row mx-md-n5">
                <button type="button" class="btn btn-success" id="procesar" onclick="procesar();">Procesar</button>
            </div>
        </div>
    </body>

    <script>
        // Funcion que procesa el numero ingresado por teclado e indica en un alert si es primo o no
        document.getElementById("procesar").onclick = function () {
            var numero = document.getElementById("numero").value;

            for(let i = 2,raiz=Math.sqrt(numero); i <= raiz; i++)
            if(numero % i === 0){
                alert('No es primo');
            }else{
                alert('Es primo');
            }
        };
    </script>


</html>
