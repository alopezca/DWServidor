<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Bienvenido</title>
</head>

<body>
<h1>Bienvenido, <?php echo $_POST['nombre'];?></h1>
<?php
/**
 * Created by PhpStorm.
 * User: xenlord
 * Date: 25/09/17
 * Time: 11:32
 */

echo "Tu edad es ".$_POST["edad"]."<br/>";
?>
<strong>Tus datos han sido guardados en la BBDD</strong>

<footer>
    <p>Copyright 2017 - Aitor López</p>
</footer>

</body>

</html>
