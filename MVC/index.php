<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscripcion de emepleado</title>
    <?php
    if (isset($_POST['nombre']) && ($_POST['nombre'] != '') && isset($_POST['apellidos']) && ($_POST['apellidos'] != '') && isset($_POST['telefono']) && ($_POST['telefono'] != '') && isset($_POST['departamento']) && ($_POST['departamento'] != '')) {
        
        // llamar al modelo para utilizar sus metodos
        require_once "modelos/modelo.php";

        $empleado = new Empleado();
        $result = $empleado -> setEmpleado($_POST['nombre'],$_POST['apellidos'],$_POST['telefono'],$_POST['departamento']);

        if($result){
            echo "<p style=\"color:green;\">El usuario se ha añadido correctamente</p>";
        }else{
            echo "<p style=\"color:red;\">El usuario se ha añadido correctamente</p>";

        }

    }
    ?>
</head>

<body>

    <h1>Formulario de inscripcipcion del empleado</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="apellidos" id="apellidos"></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="tel" name="telefono" id="telefono"></td>
            </tr>
            <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamento" id="departamento"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Crear empleado"> </td>
            </tr>


        </table>


    </form>
    <hr>
    <a href="controladores/controlador.php">Listar Empleados</a>

</body>

</html>