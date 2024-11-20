<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dentistas existentes:</h1>

   
        @foreach ($dentistas as $dentista)
            <ul>
                <li>ID: {{ $dentista->id }}</li>
                <li>Nombre: {{ $dentista->nombre }}</li>
                <li>Apellido: {{ $dentista->apellido }}</li>
                
            </ul>


            <div style="display: flex; flex-direction:row;">

                <form action="/dentistas/destroy/{{$dentista->id}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Eliminar">
                </form>

                <br>

                <form action="/dentistas/edit/{{$dentista->id}}">
                    @csrf
                    <input type="submit" value="Editar">
                </form>
            </div>
            

                
        @endforeach
        <br><br>
        <a href="/dentistas">Volver a Pagina principal dentistas</a>
    </ul>
</body>
</html>