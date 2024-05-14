<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear destino</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('destino.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Nombre del destino</label>
            <input type="text" name="nombre" placeholder="Nombre del destino" />
        </div>
        <div>
            <label>Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion del destino" />
        </div>
        <div>
            <input type="submit" value="Guardar destino" />
        </div>
    </form>
</body>
</html>