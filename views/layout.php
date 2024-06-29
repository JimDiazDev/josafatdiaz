<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Josafat Diaz - Desarrollador Web Puebla</title>
    <link rel="icon" type="image/png" href="./img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">

    <!-- Seo -->
    <meta name="description" content="Ofrezco servicios profesionales de desarrollo web con enfoque en la creación y mantenimiento de sitios modernos y funcionales. Ubicado en la ciudad de Puebla">
    <meta name="robots" content="index">
    <link rel="canonical" href="https://www.JosafatDiaz.com">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav navscroll">
            <div class="nav__content">
                <div class="nav__logo">
                    <a href="/"><img src="./img/logo.png" alt="logo"></a>
                </div>
                <div class="nav__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
                </div>
                <div class="nav__background"></div>
                <nav class="nav__elements">
                    <a class="nav__name" href="/"><img src="./img/logo.png" alt="logo"></a>
                    <ul class="nav__list">
                        <li class="nav__link"><a href="/#services">Servicios</a></li>
                        <li class="nav__link"><a href="/#planes">Planes</a></li>
                        <li class="nav__link"><a href="/#contacto">Contacto</a></li>
                        <?php if($auth): ?>
                            <li class="nav__link"><a href="/logout">Log Out</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php echo $contenido; ?>

    <script src="./build/js/app.js"></script>
</body>
</html>