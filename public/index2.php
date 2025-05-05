<?php

require __DIR__ . '/../vendor/autoload.php';

$twig_loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($twig_loader, [
    'cache' => false
]);

?>

<?php
$twig->load('home.html.twig')->display(['name' => 'Jeff']);
?>