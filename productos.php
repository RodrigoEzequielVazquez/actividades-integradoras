<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Productos</title>
</head>

<body>
    <?php include("menu.php");

    ?>

    <section id="listaProductos">
        <h2>Productos</h2>
        <ul>
            <li><a href="productos.php?juegos=ps4">Juegos PS4</a></li>
            <li><a href="productos.php?juegos=ps5">Juegos PS5</a></li>
        </ul>
    </section>

    <main>

        <section>

            <?php
            const JUEGOS_PS4 = array("harry-potter","elder-ring", "forza-horizon", "ghost", "gow-ragnarok", "jump-force", "sackboy");
            const JUEGOS_PS5 = array("harry-potter","demon-souls", "gt7", "returnal", "sonic", "spiderman-2", "uncharted");

            $juegos_de = "ps4";
            $precio_juegos = 60000;
            $ruta_juegos = "./img/juegos-ps4/";
            $juegos = JUEGOS_PS4;

            if (isset($_GET["juegos"])) {
                switch ($_GET["juegos"]) {
                    case "ps4":
                        $juegos_de = "ps4";
                        $precio_juegos = 60000;
                        $ruta_juegos = "./img/juegos-ps4/";
                        $juegos = JUEGOS_PS4;
                        break;
                    case "ps5":
                        $juegos_de = "ps5";
                        $precio_juegos = 90000;
                        $ruta_juegos = "./img/juegos-ps5/";
                        $juegos = JUEGOS_PS5;
                        break;
                }
            }

            ?>
            <div class="contenedorPrincipal">
                <div class="titulo">
                    <p>Mostrando juegos de <?php echo $juegos_de ?></p>
                </div>

                <div id="contenedorJuegos">

                    <?php
                    foreach ($juegos as $juego) {
                        $imagenSrc = $ruta_juegos . $juego . ".jpg";
                        echo '<div class="card">';
                        echo '<img src=' . $imagenSrc . ' alt=' . $juego . '>';
                        echo '<div class="precio">';
                        echo '<p >$' . $precio_juegos . '</p>';
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