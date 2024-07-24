<?php
session_name("login");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <form action="login.php" method="POST">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
        <br>
        <label for="">Password</label>
        <input type="password" name="clave">
        <br>
        <button type="submit">LogIN</button>
 


    </form>
</body>
</html>