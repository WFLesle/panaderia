<html><head><meta charset="utf-8"></head>

<body>

<?php

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "panaderia");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

$result = mysqli_query($link, "SELECT * FROM t_producto");

mysqli_data_seek ($result, 0);

$extraido= mysqli_fetch_array($result);

echo "- Nombre: ".$extraido['c_nombre']."<br/>";



mysqli_free_result($result);

mysqli_close($link);

?>

</body>

</html>