<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body class="antialiased">
        <div class="card">
            <img src="{{ asset('image/aa.jpg') }}"  alt="">
          
            <div class="card-body">
              <h5 class="card-title"> MI PAGINA WEB </h5>
              <p class="card-text">BIENVENIDO A HUÁNUCO</p>
              <a href="#" class="btn btn-primary">La ciudad de Huánuco fue fundada por los españoles el 15 de agosto de 1539; 
                sin embargo, ante los ataques de los locales liderados por Illathupa, capitán de Manco Inca y líder de la 
                resistencia contra los españoles, se terminó cambiando la fecha de proclamación al 15 de agosto de 1540.</a>
            </div>
          </div>
          
          <div class="card" aria-hidden="true">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-6"></span>
              </h5>
              <p class="card-text placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-6"></span>
                <span class="placeholder col-8"></span>
              </p>
              <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
          
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
          <div class="card" aria-hidden="true">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-6"></span>
              </h5>
              <p class="card-text placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-6"></span>
                <span class="placeholder col-8"></span>
              </p>
              <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
            </div>
          </div>
    </body>
</html>
