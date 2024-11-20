<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clientes existentes:</h1>

   
        @foreach ($clientes as $cliente)
            <ul>
                
                <li>
                    
                    Nombre: {{ $cliente->nombre }}  Apellido: {{ $cliente->apellido }}  

                    <select name="dentistaAsignado">

                        @foreach ($dentistas as $dentista)
                            <option value="">{{$dentista->nombre}}</option>
                        @endforeach
                        
                    </select>
            
                </li>
    
            </ul>  
        @endforeach
        <br><br>
        <a href="/clientes">Volver a Pagina principal de clientes</a>
    </ul>
</body>
</html>