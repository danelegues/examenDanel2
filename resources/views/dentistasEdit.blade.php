<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar dentista existente:</h1>


    <form action="" method="post">
    @csrf

        <label for="">Nombre del dentista</label>
        <input type="text" name="nombre" required value="{{}}">
        <br><br>
        <label for="">Apellidos del dentista</label>
        <input type="text" name="apellido" required>
        <br><br>
        <label for="">DNI del dentista</label>
        <input type="text" name="DNI" required>
        <br><br>
        <label for="">Fecha de nacimineto del dentista</label>
        <input type="date" name="fecha_nacimiento" required>
        <br><br>
        <label for="">En vacaciones?</label>
        <input type="checkbox" value="0" name="en_vacaciones" >
        <br><br>
        <input type="submit">
    </form>


    <a href="/dentistas ">Volver a Index Dentistas</a>
</body>
</html>