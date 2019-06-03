<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convocatoria</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/sass/style.css">
</head>
<body>
  <main class="container">
    <h2>Crear Convocatoria</h2>
    <form method="post" action="{{ route('convocatorias.store', ['post' => $id]) }} " enctype="multipart/form-data">
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
      <div class="form-row align-items-center">
        <div class="form-group">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="nombre">Nombre Curso: </label>
            <a type="text" class="form-control form-control-sm" name="nombre">{{ $id }}</a>
        </div>
        <div class="form-group col-md-6">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="correo">Instructor: </label>
            <a type="text" class="form-control form-control-sm" name="nombre">instruct1</a>
        </div>
        <div class="form-group col-md-6">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="division">Aula</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="division" placeholder="p.e. 3K1-203">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="contenido">Contenido del curso</label>
            <div class="col-sm-10">
                <textarea type="form-control" name="telnum" readonly="readonly" rows=4>El contenido del curso esta orientado a ...</textarea>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="evaluacion">Horario</label>
            <div class="col-sm-10">
            <textarea class="form-control" name="horario" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="idioma">Idioma</label>
            <div class="col-sm-10">
                <a type="text" class="form-control form-control-sm" name="idioma">Ingles</a>
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
