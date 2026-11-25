<?php
require_once __DIR__ . '/vendor/autoload.php';
var_dump(\helpers\UUID::v7());
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use controllers\MainController;

$fsl = new FilesystemLoader('views');
$twig = new Environment($fsl, ['debug' => true]);
$twig->addExtension(new DebugExtension());

echo $twig->render('home.twig', [
    'username' => 'Enzo',
    'title' => 'Index',
]);
?>