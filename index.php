<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FileSystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'temp/twig'
]);

$content = $twig->render('hello.html.twig', [
    "nome" => 'Elton Fonseca'
]);

echo $content;