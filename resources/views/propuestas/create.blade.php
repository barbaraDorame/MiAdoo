<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Propuesta de curso</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/sass/style.css">
</head>
<body>
  <main class="col-12">
    <form method="post" action="{{ route('propuestas.store') }}">
      <div class="form-row align-items-center">
      <div class="form-group">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="nombre">Nombre completo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" name="nombre" placeholder="Fulanito de Tal">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="correo">Correo electronico</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="departamento">Departamento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="departamento" placeholder="p.e. Ciencias naturales y exactas">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="division">División</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="division" placeholder="p.e. Matemáticas">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="tipo_curso">Tipo de curso</label>
        <div class="col-sm-10">
          <select class="form-control" name="tipo_curso">
            <option>Obligatoria</option>
            <option>Optativa</option>
          </select>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="contenido">Contenido del curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="contenido" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="contenido_sintetico">Contenido sintetico del curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="contenido_sintetico" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="modulos">Modulos del curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="modulos" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="evaluacion">Metodo de evaluación</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="evaluacion" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="documentacion">Documentación</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="documentacion" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="financiamiento">Financiamiento</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="financiamiento" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="objetivo_general">Objetivo general</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="objetivo_general" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="objetivo_especifico">Objetivo específico</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="objetivo_especifico" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="utilidad">Utilidad del curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="utilidad" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="experiencia_intructor">Expeiencia del instructor</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="experiencia_intructor" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="curriculum_sintetico">Sintesis de curriculum</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="curriculum_sintetico" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="perfil_instructor">Perfil del instructor</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="perfil_instructor" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="operacion_curso">Operacion del curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="operacion_curso" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="unidad">Unidades</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="unidad" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="infraestructura">Infraestructura</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="infraestructura" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="requisitos_alumnos">Requisito para pasar el curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="requisitos_alumnos" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="exclusividad">Exclusividad</label>
        <div class="col-sm-10">
          <select class="form-control" name="exclusividad">
            <option>Abierto</option>
            <option>Exclusivo</option>
          </select>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="idioma">Idioma</label>
        <div class="col-sm-10">
          <select class="form-control" name="idioma">
            <option>Español</option>
            <option>Ingles</option>
          </select>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="col-sm-2 col-form-label col-form-label-sm" for="requisitos_alumnos">Requisito para pasar el curso</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="requisitos_alumnos" rows="3"></textarea>
        </div>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </div>
      </div>
    </form>
  </main>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
