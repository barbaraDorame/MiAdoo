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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/sass/style.css">
</head>
<body>
  <main class="container">
    <h2>Crear propuesta de curso</h2>
    <form method="post" action="{{ route('propuestas.store') }}" enctype="multipart/form-data">
      @csrf
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="nombre">Nombre completo</label>
              <input type="text" class="form-control" name="nombre" placeholder="Fulanito de Tal">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="correo">Correo electronico</label>
            <input type="email" class="form-control" name="correo_instructor" placeholder="ejemplo@ejemplo.com">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="col-form-label col-form-label-sm" for="exclusividad">Exclusividad</label>
          <select class="form-control" name="exclusividad">
            <option>Abierto</option>
            <option>Exclusivo</option>
          </select>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="idioma">Idioma</label>
            <select class="form-control" name="idioma">
              <option>Español</option>
              <option>Ingles</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="departamento">Departamento</label>
            <input type="text" class="form-control" name="departamento" placeholder="p.e. Ciencias naturales y exactas">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="division">División</label>
            <input type="text" class="form-control" name="division" placeholder="p.e. Matemáticas">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="tipo_curso">Tipo de curso</label>
              <select class="form-control" name="tipo_curso">
                <option>Obligatoria</option>
                <option>Optativa</option>
              </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="contenido">Contenido del curso</label>
            <textarea class="form-control" name="contenido" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="contenido_sintetico">Contenido sintetico del curso</label>
            <textarea class="form-control" name="contenido_sintetico" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="modulos">Modulos del curso</label>
            <textarea class="form-control" name="modulos" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="evaluacion">Metodo de evaluación</label>
            <textarea class="form-control" name="evaluacion" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="documentacion">Documentación</label>
            <textarea class="form-control" name="documentacion" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="financiamiento">Financiamiento</label>
            <textarea class="form-control" name="financiamiento" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="objetivo_general">Objetivo general</label>
            <textarea class="form-control" name="objetivo_general" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="objetivo_especifico">Objetivo específico</label>
            <textarea class="form-control" name="objetivo_especifico" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="utilidad">Utilidad del curso</label>
            <textarea class="form-control" name="utilidad" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="experiencia_intructor">Expeiencia del instructor</label>
            <textarea class="form-control" name="experiencia_instructor" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="perfil_instructor">Perfil del instructor</label>
            <textarea class="form-control" name="perfil_instructor" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="curriculum_sintetico">Sintesis de curriculum</label>
            <textarea class="form-control" name="curriculum_sintetico" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="operacion_curso">Operacion del curso</label>
            <textarea class="form-control" name="operacion_curso" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="unidad">Unidades</label>
            <textarea class="form-control" name="unidad" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="infraestructura">Infraestructura</label>
            <textarea class="form-control" name="infraestructura" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="requisitos_alumnos">Requisito para pasar el curso</label>
            <textarea class="form-control" name="requisitos_alumnos" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="infraestructura">Cupo minimo</label>
            <input type="number" class="form-control" name="cupo_minimo"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="infraestructura">Cupo maximo</label>
            <input type="number" class="form-control" name="cupo_maximo"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="infraestructura">Fecha inicio</label>
            <input type="date" class="form-control" name="fecha_inicio"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="infraestructura">Fecha fin</label>
            <input type="date" class="form-control" name="fecha_final"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-form-label col-form-label-sm" for="infraestructura">Duracion (horas)</label>
            <input type="numeric" class="form-control" name="duracion_horas"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="curriculum" id="curriculum">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
      </div>
    </form>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
