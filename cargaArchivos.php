<?php
/*
echo $_FILES["fichero"]["name"]. "<br>"; //nombre archivo
echo $_FILES["fichero"]["tmp_name"]. "<br>"; //ruta donde esta almac el archivo
echo $_FILES["fichero"]["type"]. "<br>"; //tipo del archivo
echo $_FILES["fichero"]["error"]. "<br>"; // da 0 si no hay error
echo $_FILES["fichero"]["size"]. "<br>"; //tamaño del archivo en bytes
*/

//antes de mover el archivo limitar si es necesario los tipos que se aceptaran de archivos
if (mime_content_type($_FILES["fichero"]["tmp_name"]) != "image/jpeg" && mime_content_type($_FILES["fichero"]["tmp_name"]) != "image/png") {
    echo "Tipo de fichero no permitido, solo png o jpeg o jpg";
    exit();
}

//limitar el peso de un archivo
//si el peso del archivo es mayor a 3mb (en este caso)
if (($_FILES["fichero"]["size"])/1024 > 3072 ) {
    echo "Archivo demasiado pesado, debe ser menor o igual a 3mb";
    exit();
}


//mover archivo subido a una carpeta de nuestro proyecto

//preguntar si existe la carpeta archivos, sino crearla
if (!file_exists("archivos")) {
    //si no se puede crear la carpeta, que se crea con mkdir("nombre", permisos);
    if (!mkdir("archivos", 0777)) {
        echo "error al crear el directorio";
        exit(); //detiene la ejecucion del script
    }
}

//chmod es para darle permisos a la carpeta de lectura y escritura
chmod("archivos", 0777);

//move_uploaded_file("ruta del archivo", "ruta a donde ira el arch")
if (move_uploaded_file($_FILES["fichero"]["tmp_name"], "archivos/".$_FILES["fichero"]["name"])) {
    echo "Se cargo el archivo correctamente";
}else {
    echo "Error al cargar el archivo";
}



?>