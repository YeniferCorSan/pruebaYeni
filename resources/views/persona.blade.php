<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Persona</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5 center-block">
                <div class="panel-heading">
                    <h2 style="color: #7DCEA0;">Alta de información</h2>
                </div>
                @if (isset($edit))
                <form action="{{ route('actualizar') }}" method="POST">
                    @else
                    <form action="{{ route('guardar') }}" method="POST">
                        @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        @if (isset($edit))
                        <input type="hidden" name="id" value="{{ $personas[0] -> id }}" />
                        @endif
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            @if (isset($edit))
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$personas[0] -> nombre}}" aria-describedby="Nombre" placeholder="Ingrese su nombre">
                            @else
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Nombre" placeholder="Ingrese su nombre">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido(s)</label>
                            @if (isset($edit))
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$personas[0] -> apellido}}" placeholder="Ingrese su apellido">
                            @else
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            @if (isset($edit))
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{$personas[0] -> fechaNacimiento}}">
                            @else
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            @if (isset($edit))
                            <select id="genero" class="form-control" name="genero">
                                @if ($personas[0]->genero == "F")
                                <option selected>F</option>
                                <option>M</option>
                                @else
                                <option>F</option>
                                <option selected>M</option>
                                @endif
                            </select>
                            @else
                            <select id="genero" class="form-control" name="genero">
                                <option selected>F</option>
                                <option>M</option>
                            </select>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            @if (isset($edit))
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="Nombre" placeholder="Ingrese su correo electrónico" value="{{$personas[0] -> email}}">
                            @else
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="Nombre" placeholder="Ingrese su correo electrónico">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            @if (isset($edit))
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{$personas[0] -> telefono}}" placeholder="Ingrese su teléfono">
                            @else
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            @if (isset($edit))
                            <input type="text" class="form-control" id="calle" name="calle" aria-describedby="Nombre" value="{{$personas[0] -> calle}}" placeholder="Ingrese su calle">
                            @else
                            <input type="text" class="form-control" id="calle" name="calle" aria-describedby="Nombre" placeholder="Ingrese su calle">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="codigoPostal">Código postal</label>
                            @if (isset($edit))
                            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="Ingrese su código postal" value="{{$personas[0] -> codigoPostal}}">
                            @else
                            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="Ingrese su código postal">
                            @endif
                        </div>
                        @if (isset($edit))
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <td><a href="{{route('persona')}}" class="btn btn-danger">Cancelar</a></td>
                        @else
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        @endif
                        <td><a href="{{route('show')}}" class="btn btn-success">Mostrar Todo</a></td>
                    </form>

            </div>
        </div>
    </div>
</body>

</html>