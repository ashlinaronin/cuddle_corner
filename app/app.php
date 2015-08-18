<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Species.php";
    //require_once __DIR__."/../src/Category.php";

    $app = new Silex\Application();

    $server = 'mysql:host=localhost;dbname=cuddle_corner';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'species' => Species::getAll()
        ));
    });

    return $app;

 ?>
