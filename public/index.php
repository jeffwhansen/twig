<?php

require __DIR__ . '/../vendor/autoload.php';

$twig_loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($twig_loader, [
    'cache' => false
]);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/main.css" rel="stylesheet">
    <title>Twig</title>
</head>
<body>
<h1 class="text-red-500 text-xl">Twig</h1>

<p>info</p>
<?php
$twig->load('info.html.twig')->display(['name' => 'Jeff']);
?>

<hr />

<p>panel</p>
<?php
$twig->load('panel.html.twig')->display(['name' => 'Jeff']);
?>

<p>home</p>
<?php
$twig->load('home.html.twig')->display(['name' => 'Jeff']);
?>

</body>
</html>