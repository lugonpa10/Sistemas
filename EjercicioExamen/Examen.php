<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 5px;
        }

        form {
            width: 80%;
        }
    </style>
</head>

<body>
    <h1>Formulario de subscripcion</h1>

    <form action="Examen_datos.php" method="post">
        <div>
            <label for="inputNombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="inputApellido1">Primer Apellido:</label>
            <input type="text" name="apellido1" id="apellido1">
        </div>
        <div>
            <label for="inputApellido2">Segundo Apellido:</label>
            <input type="text" name="apellido2" id="apellido2">
        </div>
        <div>
            <label for="inputCorreo">Correo Electronico:</label>
            <input type="email" name="correo" id="correo">
        </div>

        <br>
        <br>


        <div>
            <label for="respuesta">Desea recibir informacion sobre las publicaciones?</label><br>

            <input type="radio" name="respuesta" id="si" value="si">
            <label for="si">Si,estoy interesado</label><br>

            <input type="radio" name="respuesta" id="no" value="no">
            <label for="no">No,gracias</label>
        </div>

        <br>
        <br>

        <div>
            <input type="checkbox" name="revistas[]" id="revista1" value="National Geographic">
            <label for="revista1">National Geographic</label><br>

            <input type="checkbox" name="revistas[]" id="revista2" value="Electronic Letters">
            <label for="revista2">Electronic Letters</label><br>

            <input type="checkbox" name="revistas[]" id="revista3" value="Conocer">
            <label for="revista3">Conocer</label><br>

            <input type="checkbox" name="revistas[]" id="revista4" value="Science">
            <label for="revista4">Science</label><br>

            <input type="checkbox" name="revistas[]" id="revista5" value="Desarrollo web">
            <label for="revista5">Desarrollo web</label><br>


        </div>

        <br>
        <br>

        <div>

            <label for="InputState">Formas de subscripcion</label>
            <select name="suscripcion" id="InputState">
                <option value="semanal">Semanal</option>
                <option value="mensual">Mensual</option>
                <option value="anual">Anual</option>

            </select>

        </div>

        <br>
        <br>

        <div>
            <button type="submit">Subscribirme</button>
        </div>





    </form>

</body>

</html>