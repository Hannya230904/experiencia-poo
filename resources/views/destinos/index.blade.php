<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Destinos</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('destino.crear')}}">Anadir un destino</a>
        </div>
        <table border="1">
            <tr>
                <th>Destino</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
            @foreach($destinos as $destino)
                <td>{{$destino->nombre}}</td>
                <td>{{$destino->descripcion}}</td>
                <td>
                    <a href="{{route('destino.editar', ['destino' => $destino])}}">Editar</a>
                </td>
                <td>
                    <form method="post" action="{{route(">
                        @csrf
                        @method(delete)
                        <input type="submit" value="Eliminar"/>
                    </form>
                </td>
            @endforeach
        </table>
    </div>
</body>
</html>