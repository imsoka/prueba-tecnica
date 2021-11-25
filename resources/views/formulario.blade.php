<html>
    <head>
        <title> Prueba técnica, Víctor Araque Casaus </title>
        <meta charset="UTF-8">
        <meta name="description" content="La prueba tecnica de Victor Araque Casaus">
        <meta name="author" content="Victor Araque Casaus">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
        <script
          src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
          crossorigin="anonymous"></script>
    </head>
    <body>
        <x-header/>
        <x-formulario.header/>
        <div>
            <x-formulario.formulario/>
        </div>
        @if($errors->any())
            <ul id="errores">
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        @endif
        <div>
        </div>
        <script>
            $.ajax({
                url: "/provincias/",
                dataType: 'JSON',
                success: function (response)
                {
                    var provincias = response.provincias;

                    provincias.forEach(function (provincia)
                    {
                        $("#provincias").append('<option value="' + provincia.id + '">' + provincia.name + '</option>');
                    });
                },
            });

            $("#provincias").change(function ()
            {
                resetearSelect("#concesiones");

                if($(this).val() != null)
                {
                    $("#concesiones").removeAttr("disabled")

                    $.ajax({
                        url: "/concesiones?provincia=" + $(this).val(),
                        dataType: 'JSON',
                        success: function (response)
                        {
                            var concesiones = response.concesiones;

                            concesiones.forEach(function (concesion)
                            {
                                $("#concesiones").append('<option value="' + concesion.id + '">' + concesion.name + ', ' + '(' + concesion.address + ')</option>');
                            });
                        },
                    });
                }
                else if($(this).children().length >= 1)
                {
                    $("#concesiones").prop("disabled", true);
                }
            });

            function resetearSelect(elemento)
            {
                $(elemento).empty();
                $(elemento).append('<option disabled selected value>Selecciona</option>');
            }
        </script>
    </body>
</html>
