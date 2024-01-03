<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <?php include("menu.php"); ?>
    <main>
        <h2>
            Bienvenido a tienda online, encontra eso que estabas buscando al mejor precio!!
        </h2>
        <section>

            <?php
          
            const JUEGOS_PS4 = array("harry-potter","elder-ring", "forza-horizon", "ghost");
            const JUEGOS_PS5 = array("harry-potter","demon-souls", "gt7", "returnal");
            
            $precio_juegos_4 = 60000;
            $ruta_juegos_4 = "./img/juegos-ps4/";
            $juegos_4= JUEGOS_PS4;
      
            $precio_juegos_5 = 90000;
            $ruta_juegos_5 = "./img/juegos-ps5/";
            $juegos_5 = JUEGOS_PS5;
      
            ?>
            <div class="contenedorPrincipal">
                <div class="titulo">
                    <h3>Juegos destacados!</h3>
                    <p>Los mejores juegos de PS4 y PS5</p>
                </div>
                <div id="contenedorJuegos">


                    <?php
                    foreach ($juegos_4 as $juego) {
                        $imagenSrc = $ruta_juegos_4 . $juego . ".jpg";
                        echo '<div class="card">';
                        echo '<img src=' . $imagenSrc . ' alt=' . $juego . '>';
                        echo '<div class="precio">';
                        echo '<p>$' . $precio_juegos_4 . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    foreach ($juegos_5 as $juego) {
                        $imagenSrc = $ruta_juegos_5 . $juego . ".jpg";
                        echo '<div class="card">';
                        echo '<img src=' . $imagenSrc . ' alt=' . $juego . '>';
                        echo '<div class="precio">';
                        echo '<p>$' . $precio_juegos_5 . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>