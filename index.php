<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FileSystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'temp/twig'
]);

$myFilter = new \Twig\TwigFilter('myfilter', function ($string) {
    return "- " . $string;
});

$twig->addFilter($myFilter);

$content = $twig->render('hello.html.twig', [
    "nome" => 'Elton Fonseca'
]);

echo $content;