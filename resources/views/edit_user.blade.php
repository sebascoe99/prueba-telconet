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
            <div class="row" style="padding: 10px; background-color:#198754">
                <div class="col-md-8"><h2 style="color: white">CREAR USUARIOS</h2></div>
            </div>
            <div class="row">
                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </body>
</html>
