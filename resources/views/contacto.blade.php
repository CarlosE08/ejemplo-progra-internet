<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contactos</h1>

    <form action="contacto" method="POST">
        
        <h3>{{ $tipo }}</h3>
        
        @csrf
        <label for="correo">correo:</label> <br>
        <input 
            type="email" 
            name="correo"
            @if($tipo == 'alumno')
                value = "@alumnos.udg.mx"
            @else
                value = "@gmail.com"
            @endif
            >
            <br>
        <label for="comentario">comentario:</label> <br>
        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
            <br>
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="">
                <option value="Alumno">Alumno</option>
                <option value="Empleador">Empleador</option>
            </select>        
        <input type="submit" value="Enviar">
    </form>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</html>