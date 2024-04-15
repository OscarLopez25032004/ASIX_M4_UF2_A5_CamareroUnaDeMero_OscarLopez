<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaces a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Enlaces a Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">    <!-- Enlaces de iconos de página -->
    <!-- Enlaces al icono de la página -->
    <link rel="shortcut icon" href="./img/chess-rook-solid.svg" type="image/x-icon">
    <!-- Enlaces a CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Titulo de la página -->
    <title>CHECKMATE RESTAURANT</title>
    <!-- Enlaces a Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Enlaces de FontAwesome -->
    <script src="https://kit.fontawesome.com/460adc8f7b.js" crossorigin="anonymous"></script>
</head>
<body>
    <img src="./img/logo.png" alt="Logo" class="imglogo">
    <div class="column-3">
        <div class="menu-restaurante">
            <h2>Aperturas</h2>
            
            <?php
            /* Primer XML */
            if (file_exists('./xml/cartarestaurante.xml')) {
                $platos = simplexml_load_file('./xml/cartarestaurante.xml');
                foreach ($platos->entrantes as $entrantes) {
                    echo "<strong>" . $entrantes['nombre'] . "</strong><br>";
                    echo "  " . $entrantes['descripcion'] . "<br>";
                    echo "Características: <i class='fa-solid fa-wheat-awn-circle-exclamation'></i><i class='fa-solid fa-fire'></i>" . "<br>";
                    echo "Calorías: " . $entrantes['kcal'] . "<br>";
                    echo "Precio: €" . $entrantes['precio'] . "<br>";
                    echo "Ingredientes:<br>";
                foreach ($entrantes->ingrediente as $ingrediente) {
                    echo "- " . $ingrediente['nombre'] . "<br>";

                }
                    echo "<br>";
                }
            } else {
                exit('¡Restaurante fuera de servicio!.');
            }
            ?>
        </div>
        <div class="menu-restaurante">
            <h2>Jugadas</h2>
            <?php
            /* Tercer XML */
            if (file_exists('./xml/cartarestaurante.xml')) {
            $platos = simplexml_load_file('./xml/cartarestaurante.xml');
            foreach ($platos->segundos as $segundos) {
                echo "<strong>" . $segundos['nombre'] . "</strong><br>";
                echo "" . $segundos['descripcion'] . "<br>";
                echo "Características: <i class='fa-solid fa-wheat-awn-circle-exclamation'></i><i class='fa-solid fa-fire'></i><i class='fa-solid fa-fire'></i>" . "<br>";
                echo "Calorías: " . $segundos['kcal'] . "<br>";
                echo "Precio: €" . $segundos['precio'] . "<br>";
                echo "Ingredientes:<br>";
            foreach ($segundos->ingrediente as $ingrediente) {
                echo "- " . $ingrediente['nombre'] . "<br>";

            }
                echo "<br>";
            }
            } else {
                exit('¡Restaurante fuera de servicio!.');
            }
            ?>
    </div>
    <div class="menu-restaurante">
            <h2>Finalización</h2>
            <?php
            /* Segundo XML */
            if (file_exists('./xml/cartarestaurante.xml')) {
            $platos = simplexml_load_file('./xml/cartarestaurante.xml');
            foreach ($platos->postres as $postres) {
                echo "<strong>" . $postres['nombre'] . "</strong><br>";
                echo "  " . $postres['descripcion'] . "<br>";
                echo "Características: <i class='fa-solid fa-wheat-awn-circle-exclamation'></i><i class='fa-solid fa-fire'></i>" . "<br>";
                echo "Calorías: " . $postres['kcal'] . "<br>";
                echo "Precio: €" . $postres['precio'] . "<br>";
                echo "Ingredientes:<br>";
            foreach ($postres->ingrediente as $ingrediente) {
                echo "- " . $ingrediente['nombre'] . "<br>";

            }
                    echo "<br>";
                }
            } else {
                exit('¡Restaurante fuera de servicio!.');
            }
            ?>
            <h2>Piezas</h2>
            <?php
            if (file_exists('./xml/cartarestaurante.xml')) {
            $platos = simplexml_load_file('./xml/cartarestaurante.xml');
            foreach ($platos->bebidas as $bebidas) {
                echo "<strong>" . $bebidas['nombre'] . "</strong><br>";
                echo "  " . $bebidas['descripcion'] . "<br>";
                echo "Características: <i class='fa-solid fa-martini-glass-citrus'></i>" . "<br>";
                echo "Calorías: " . $bebidas['kcal'] . "<br>";
                echo "Precio: €" . $bebidas['precio'] . "<br>";
                echo "<br>";
                }
            } else {
                exit('¡Restaurante fuera de servicio!.');
            }
            ?>
    </div>
</div>
</body>
</html>