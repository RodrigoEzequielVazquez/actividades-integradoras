<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Contacto</title>
</head>

<body>
    <?php include("menu.php"); ?>
    <section id="contacto">
        <h1> Contacto </h1>
        <div>
            <form action="enviar_consulta.php" method="post">
                <label for="nombre"> Nombre </label>
                <input type="text" name="nombre" class="contacto_input">

                <label for="apellido"> Apellido </label>
                <input type="text" name="apellido" class="contacto_input">

                <label for="edad"> Edad </label>
                <input type="number" name="edad" class="contacto_input">

                <label for="mensaje"> Mensaje </label>
                <textarea name="mensaje" cols="30" rows="10"></textarea>

                <input type="submit" value="Enviar mensaje">

            </form>
            <?php
            if (isset($_GET["ok"])) {
                echo "<h3> Su mensaje ha sido enviado con exito </h3>";
            }
            ?>
        </div>
    </section>

</body>

</html>