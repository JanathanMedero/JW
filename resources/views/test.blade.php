<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row mt-4 d-flex justify-content-center align-items-center" style="height: 450px;">
        <div class="col-md-3">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Sistema de territorios de la congregación "El Lago"</h3>
        </div>
    </div>
    <div class="row">
        <hr>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-2 d-flex justify-content-center">
            <a href="{{ route('login') }}" type="button" class="btn btn-primary">Iniciar sesión</a>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center align-items-center">
        <div class="col-md-3 d-flex justify-content-center">
            <a href="{{ route('register') }}" type="button" class="btn btn-danger">Registrarse</a>
        </div>
    </div>

</div>
</body>
</html>
