<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Publicaciones</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1> Publicaciones </h1> 
        <ul class="publicaciones_list"> 
            <!-- Rendered by JS -->
        </ul>
        <div class="links">
            <button class="prevButton"> Anterior </button>
            <button class="nextButton"> Siguiente </button>
        </div>
    </body>
</html>
