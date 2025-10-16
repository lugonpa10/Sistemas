<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión del formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php 

        function formato($dato){
            $dato=trim($dato);
            $dato=htmlspecialchars($dato);
            $dato=stripslashes($dato);

            return $dato;
        }

        $error=false;

        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(!isset($_POST['nombre']) || empty($_POST['nombre'])){
                    echo "<span style=\"color:red;\">El campo nombre es obligatorio</span><br>";
                    $error=true;
            }else{
                $nombre=filter_var($_POST['nombre'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            if(!isset($_POST['apellidos']) || empty($_POST['apellidos'])){
                echo "<span style=\"color:red;\">El campo apellidos es obligatorio</span><br>";
                $error=true;
            }else{
                 $apellidos=filter_var($_POST['apellidos'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            if(!isset($_POST['correo']) || empty($_POST['correo'])){
                echo "<span style=\"color:red;\">El campo correo no puede estar vacio</span><br>";
                $error=true;
            }else{
                $correo=filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
                if(!filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL)){
                    echo "<span style=\"color:red;\">El campo correo no es valido</span><br>";
                    $error=true;
                }
            }

             if(!isset($_POST['estudios']) || empty($_POST['estudios'])){
                echo "<span style=\"color:red;\">El campo estudios es obligatorio</span><br>";
                $error=true;
            }else{
                $estudios=filter_var($_POST['estudios'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

           if(!isset($_POST['estado']) || empty($_POST['estado'])){
                echo "<span style=\"color:red;\">El campo estado es obligatorio</span><br>";
                $error=true;
            }else{
                $estado=filter_var($_POST['estado'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            if(!isset($_POST['genero']) || empty($_POST['genero'])){
                    echo "<span style=\"color:red;\">El campo genero es obligatorio</span><br>";
                    $error=true;
            }else{
                $genero=filter_var($_POST['genero'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            $idiomas=$_POST['idiomas'];

             if (!isset($_POST['info'])|| empty($_POST['info'])) {
                echo "<span style=\"color:red;\">El campo informacion es obligatorio</span><br>";
                $error=true;
                
            }else{
                $informacion=filter_var($_POST['info'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }


            }
                
    ?>
</head>
<body>

            <?php 
            
                if(!$error){

                    echo "<h1 class=\"display-5\">Datos introducidos en la inscripcion</h1>";
                    if($genero=="hombre"){
            ?>

                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nombre y Apellidos</div>

                            <?php 
                                echo "Bienvenido señor $nombre $apellidos";
                    }else if($genero=="mujer"){
                            ?>
                <ol class="list-group list-group-numbered">
                 <li class="list-group-item d-flex justify-content-between align-items-start">
                     <div class="ms-2 me-auto">
                        <div class="fw-bold">Nombre y Apellidos</div>
                                    <?php
                                     echo "Bienvenida señora $nombre $apellidos ";
                                }
                                     ?>
     
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                     <div class="fw-bold">Correo</div>
                                 <?php echo $correo ?>
                </div>
                    </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Estudios</div>
                                    <?php echo $estudios ?>
                            </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Estado civil</div>
                                    <?php echo $estado ?>
                            </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Idiomas que habla</div>
                                    <?php
                                    
                                        for($i=0;$i<count($idiomas);$i++){
                                            echo $idiomas[$i]."<br>";
                                        }
                                    ?>
                            </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Informacion relevante</div>
                                    <?php echo $informacion ?>
                            </div>
                </li>
                    </ol>
            



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
<?php } ?>
</html>