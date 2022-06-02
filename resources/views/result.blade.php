<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba GDOCE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <br />
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <h2 class="form-title" style="color:lightcyan">Prueba adivina el número</h2>

                    </nav>
                    <div class="row">
                        <div class="col-md">
                            <h2>El número elegido es: {{ $numero }}</h2>
                        </div>
                    </div>
                    <br />
                    <div class="form-group row">
                        <div class="col">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
