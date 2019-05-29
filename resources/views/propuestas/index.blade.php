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
  <div class="container">
    <div class="row">
      <div class="col-12">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br />
      @endif
      </div>
    </div>
    <div class="row" style="margin-top:30px;">
      <div class="col-12">
        <a href="{{ route('propuestas.create') }}" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Crear curso</a>

      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-striped">
          <thead>
              <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Correo electronico</td>
                <td colspan="2">Accion</td>
              </tr>
          </thead>
          <tbody>
              @foreach($propuestas as $propuesta)
              <tr>
                  <td>{{$propuesta->id}}</td>
                  <td>{{$propuesta->nombre}}</td>
                  <td>{{$Propuesta->correo_instructor}}</td>
                  <td><a href="{{ route('propuestas.edit',$propuesta->id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                      <form action="{{ route('propuestas.destroy', $propuesta->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  <div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
