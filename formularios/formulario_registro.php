<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      *{
        padding:5px;
      }
        form{
            width:80%;
        }

        label.form-label{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 class="display-3">Formulario de inscripcion</h1>

 <form class="row g-3" action="datos_formulario.php" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputPassword4" name="apellidos">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="1234 Main St" name="correo">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estudios</label>
    <select id="inputState" class="form-select" name="estudios">
      <option selected value="ESO">ESO</option>
      <option value="CM FP">CM FP</option>
      <option value="CS FP">CS FP</option>
      <option value="Universidad">Universidad</option>
    </select>
  </div>

  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado civil</label>
    <select id="inputState" class="form-select" name="estado">
      <option selected value="soltero/a">Soltero/a</option>
      <option value="casado/a">Casado/a</option>
      <option value="divorciado/a">Divorciado/a</option>
      <option value="viudo/a">Viudo/a</option>
    </select>
  </div>
  
<div class="form-check">
  <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault1" value="hombre">
  <label class="form-check-label" for="flexRadioDefault1">
    Hombre
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault2" checked value="mujer">
  <label class="form-check-label" for="flexRadioDefault2">
    Mujer
  </label>
</div>

<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="idiomas[]" value="ingles">
  <label class="form-check-label" for="flexSwitchCheckDefault">Ingles</label>
</div>

<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="idiomas[]" value="frances">
  <label class="form-check-label" for="flexSwitchCheckDefault">Frances</label>
</div>

<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="idiomas[]" value="aleman">
  <label class="form-check-label" for="flexSwitchCheckDefault">Alemán</label>
</div>

   <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="idiomas[]" value="italiano">
            <label class="form-check-label" for="flexSwitchCheckDefault">Italiano</label>
</div>
<textarea name="info" id="info" placeholder="Incidencias" style="resize:none;" cols="20"></textarea>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>