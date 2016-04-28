<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 28.04.2016
 * Time: 17:24
 */
require_once 'res/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array(
        'cache' => 'cache',
        'auto_reload' => true
    ));

echo $twig->render('main.html.twig', array(
    'title'     => 'Город: Казань',
    'topic'    => 'Мая твая не понимай, дэнгы давай.... однако :-('
    ));
?>