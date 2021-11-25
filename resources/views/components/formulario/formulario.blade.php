<form action="{{route('formulario.store')}}" method="POST">
    @csrf
    <div class="row">
        <h2>
            ¿QUÉ MODELO QUIERES PROBAR?
        </h2>
        <div class="form-group">
            <label for="modelo">
                Modelo principal*
            </label>
            <select name="modelo" required>
                <option disabled selected value> Selecciona </option>
                <option value="multivan"> Multivan </option>
                <option value="caravelle"> Caravelle </option>
            </select>
        </div>
    </div>
    <div class="row">
        <h2>
            ¿TUS DATOS DE CONTACTO SON?
        </h2>
        <div id="trato" class="form-group">
            <label for="trato">
                Trato*
            </label>
            <select name="trato" required>
                <option disabled selected value> Selecciona </option>
                <option value="sr"> Sr. </option>
                <option value="sra"> Sra. </option>
            </select>
        </div>
        <div id="nombre" class="form-group">
            <label for="nombre">
                Nombre*
            </label>
            <input type="text" name="nombre" required/>
        </div>
        <div id="apellido1" class="form-group">
            <label for="apellido1">
                1er Apellido*
            </label>
            <input type="text" name="apellido1" required/>
        </div>
        <div id="apellido2" class="form-group">
            <label for="apellido2">
                2er Apellido
            </label>
            <input type="text" name="apellido2"/>
        </div>
        <div id="email" class="form-group">
            <label for="email">
                E-mail*
            </label>
            <input type="email" name="email" required/>
        </div>
        <div id="movil" class="form-group">
            <label for="movil">
                Móvil*
            </label>
            <input type="number" name="movil" required/>
        </div>
    </div>
    <div class="row">
        <h2>
            ESCOGE TU CUESTIONARIO
        </h2>
        <div id="provincia" class="form-group">
            <label for="modelo">
                Provincia*
            </label>
            <select id="provincias" type="select" name="provincia_id" required>
                <option disabled selected value> Selecciona </option>
            </select>
        </div>
        <div id="concesion" class="form-group">
            <label for="modelo">
                Concesión*
            </label>
            <select id="concesiones" type="select" name="concesion_id" required disabled>
                <option disabled selected value> Selecciona </option>
            </select>
        </div>
    </div>
    <div class="submit-group">
        <input id="checkPolicies" type="checkbox" name="policies" required/>
        <label for="policies">
            He leído y acepto la Política de Privacidad
        </label>
        <button type="submit">
            Enviar
        </button>
    </div>
</form>
