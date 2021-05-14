<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Persona</title>

</head>

<body>
    <div class="container col-md-12 col-md-offset-2 p-5 center-block text-center">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="color: #7DCEA0;">Listado de personas</h2>
            </div>
            @if ($personas->isEmpty())
            <div>No hay personas</div>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Email</th>
                        <th>telefono</th>
                        <th>calle</th>
                        <th>CP</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{!! $persona->id !!}</td>
                        <td>{!! $persona->nombre !!}</td>
                        <td>{!! $persona->apellido!!}</td>
                        <td>{!! $persona->fechaNacimiento!!}</td>
                        <td>{!! $persona->genero!!}</td>
                        <td>{!! $persona->email!!}</td>
                        <td>{!! $persona->telefono!!}</td>
                        <td>{!! $persona->calle!!}</td>
                        <td>{!! $persona->codigoPostal!!}</td>
                        <td><a href="{{route('editar', $persona->id)}}" class="fas fa-user-edit"></a></td>
                        <td><a href="{{route('borrar', $persona->id)}}" class="fas fa-trash-alt"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
            
        </div>
        <td><a href="{{route('persona')}}" class="btn btn-danger">Salir</a></td>
    </div>
</body>

</html>