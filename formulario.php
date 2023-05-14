<?php
if (isset($_FILES['image'])) {
    $ruta_img = "./Imagen/";
    $nom_img = md5(uniqid(rand(), true)) . ".jpg";
    !is_dir($ruta_img) ? mkdir($ruta_img, 0777, true) : null;
    move_uploaded_file($_FILES['image']['tmp_name'], $ruta_img . $nom_img);
    echo "<pre>";
    echo "Imagen creada";
    echo "</pre>";
    echo "<pre>";
    echo '<a href="http://localhost:3000/index.php">Volver</a>';
    echo "</pre>";
}
