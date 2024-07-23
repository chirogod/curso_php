<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="obtenForms.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>

        <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lengua">Lengua</option>
        </select>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">Manzana
        </label>

        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>