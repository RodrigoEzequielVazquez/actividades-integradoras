<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <header id="contenedorMenu">
        <nav id="menu">
            <ul>
                <li><a href="index.php"> Inicio </a></li>
                <li><a href="#"> Productos </a></li>
                <li><a href="#"> Sobre nosotros </a></li>
                <li><a href="#"> Contacto </a></li>
            </ul>
        </nav>

        <h1>Tienda online</h1>

    </header>
    <main>
        <h2>
            Bienvenido a tienda online, encontra eso que estabas buscando al mejor precio!!
        </h2>
        <section>

            <?php
            $juegos_de = "ps4";
            $precio_juegos = 60000;
            $ruta_juegos = "";
            const JUEGOS_PS4 = array("elder-ring", "forza-horizon", "ghost", "gow-ragnarok", "jump-force", "sackboy");
            const JUEGOS_PS5 = array("demon-souls", "gt7", "returnal", "sonic", "spiderman-2", "uncharted");
            ?>
            <div id="contenedorOfertas">
                <div id="tituloOfertas">
                    <h3>Ofertas de fin de año!</h3>
                    <p>Mostrando juegos de <?php echo $juegos_de ?></p>
                </div>
                <div id="contenedorJuegos">

                 <?php if ($juegos_de == "ps4") {
                    $precio_juegos == 60000;
                    $ruta_juegos = "./img/juegos-ps4/";
                    $juegos = JUEGOS_PS4;

                 }else{
                    $precio_juegos = 90000;
                    $ruta_juegos = "./img/juegos-ps5/";
                    $juegos = JUEGOS_PS5;
                 };
                   ?>

                    <div class="card">
                        <img src=<?php echo $ruta_juegos . $juegos[0] . ".jpg"; ?> alt=<?php echo $juegos[0]; ?>>
                        <div class="precio">
                            <p class="tachar">$ <?php echo $precio_juegos ?></p>
                            <p>$ <?php echo $precio_juegos * 0.7 ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <img src=<?php echo $ruta_juegos . $juegos[1] . ".jpg"; ?> alt=<?php echo $juegos[1]; ?>>
                        <div class="precio">
                            <p class="tachar">$ <?php echo $precio_juegos ?></p>
                            <p>$ <?php echo $precio_juegos * 0.7 ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <img src=<?php echo $ruta_juegos . $juegos[2] . ".jpg"; ?> alt=<?php echo $juegos[2]; ?>>
                        <div class="precio">
                            <p class="tachar">$ <?php echo $precio_juegos ?></p>
                            <p>$ <?php echo $precio_juegos * 0.7 ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <img src=<?php echo $ruta_juegos . $juegos[3] . ".jpg"; ?> alt=<?php echo $juegos[3]; ?>>
                        <div class="precio">
                            <p class="tachar">$ <?php echo $precio_juegos ?></p>
                            <p>$ <?php echo $precio_juegos * 0.7 ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <img src=<?php echo $ruta_juegos . $juegos[4] . ".jpg"; ?> alt=<?php echo $juegos[4]; ?>>
                        <div class="precio">
                            <p class="tachar">$ <?php echo $precio_juegos ?></p>
                            <p>$ <?php echo $precio_juegos * 0.7 ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <img src=<?php echo $ruta_juegos . $juegos[5] . ".jpg"; ?> alt=<?php echo $juegos[5]; ?>>
                        <div class="precio">
                            <p class="tachar">$ <?php echo $precio_juegos ?></p>
                            <p>$ <?php echo $precio_juegos * 0.7 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>