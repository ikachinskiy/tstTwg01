<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест Twig 01-1</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    require_once 'vendor/autoload.php';
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('template');
    $twig = new Twig_Environment($loader);

    echo $twig->render('1.html.twig', array('name' => 'Начальник'));
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>