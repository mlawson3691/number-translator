<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/NumberTranslator.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->post('/process', function() use ($app) {
        $translator = new NumberTranslator;
        $results = $translator->translate($_POST['number']);
        return $app['twig']->render('results.html.twig', array('result'=>$results));
    });

    return $app;
?>
