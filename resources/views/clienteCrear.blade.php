<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear nuevo cliente</h1>


    <form action="/clientes/store" method="post">
        @csrf

        <label for="">Nombre del cliente</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="">Apellidos del cliente</label>
        <input type="text" name="apellido" required>
        <br><br>
        <label for="">DNI del cliente</label>
        <input type="text" name="DNI" required>
        <br><br>
        <label for="">Fecha de nacimineto del cliente</label>
        <input type="date" name="fecha_nacimiento" required>
        <br><br>
    
        <br><br>
        <input type="submit">

    </form>
</body>
</html>