<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apuestas</title>
</head>
<body>
    <div class="container h-2">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"></h4>
                <p>{{ session('success') }}</p>
                <p class="mb-0"></p>
            </div>
        @else
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>no se han guardado apuestas recientemente</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
    @endif  
    </div>
    
    <div>En Juego</div>
    @if(session('delete'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session ('delete') }}</strong> 
        </div>
    @endif
    <script>
      $(".alert").alert();
    </script>
        <div>
            @foreach ($apuestas as $apuesta)
                <div class="row">
                    <div class="col">
                        <p>{{$apuesta->rest_final}}</p>
                    </div>
                    <div class="col">
                        <p>{{$apuesta->estado}}</p>
                    </div>
                    <div class="col">
                        <p>{{$apuesta->apostado}}</p>
                    </div>
                    <div>
                        <a class="btn btn-danger btn-small" href="javascript: document.getElementById('delete-{{$apuesta->id}}').submit()">Eliminar</a><!--boton del formualario para eliminar un elemnto de la lista-->
                    <form id="delete-{{$apuesta->id}}" action="{{ route('apuestas.destroy', $apuesta->id) }}" method="POST"><!-- formulario para ejecutar la accion del boton id unico, accion desde la pagina del formulario y metodo post-->
                    @method('delete') <!-- este metodo se llama pa que lo direcciones a la route delete-->
                    @csrf <!-- necesario para todos los formularios-->
                    </form>
                    </div>
                </div>
            @endforeach
        </div>
    <div>Ganadas</div>
    <div>Perdidas</div>
</body>
</html>