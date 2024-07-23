<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="obtenForms.php" method="POST">
        <!--  SELECT MULTIPLE, seleccionar muchas opciones y obtenerlas-->
        <label for="asignatura">Asignatura</label>
        <!-- agregandole el atributo MULTIPLE y poniendole corchetes al name -->
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lengua">Lengua</option>
        </select>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana
        </label>

        <label for="opcion-2">
            <input type="checkbox" value="Banana" id="opcion-2" name="frutas[]">Banana
        </label>

        <label for="opcion-3">
            <input type="checkbox" value="Frutilla" id="opcion-3" name="frutas[]">Frutilla
        </label>

        <br><br>

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>