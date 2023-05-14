<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <main style="text-align: center;">
        <h1>Bienvenidos</h1>
        <h4>Nueva Página</h4>
        <h5>Nuevo proyecto para practicar</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum quas voluptatibus quae voluptatum voluptatibus quae voluptatum voluptatibus quae voluptatum
        <form enctype="multipart/form-data" style="display: grid; width: 35%; margin:0 auto; padding: 5px; border:1px solid gray" action="formulario.php" method="post">
            <label for="nombre">Ingrese nombre:</label>
            <input type="text" name="nom" id="nombre" style="margin-bottom: 5px; background-color: #ddd;">
            <label for="apellido">Ingrese nombre:</label>
            <input type="text" name="ape" id="apellido" style="margin-bottom: 5px; background-color: #ddd;">
            <select name="pelicula" id="">
                <option value="Terror">Terror</option>
                <option value="Acción">Acción</option>
                <option value="Suspenso">Suspenso</option>
            </select>

            <label for="homepage">Add your homepage:</label>
            <input type="url" id="homepage" name="homepage">
            <input type="file" name="image" width="300" height="300" accept="image/jpeg, image/png" style="margin: 15px 0;">
            <input type="submit" value="enviar">

        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Peliculas</h2>
        <div class="container">
            <img src="" alt="" id="chuck">
        </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>