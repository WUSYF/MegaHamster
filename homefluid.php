<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10.12.18
 * Time: 10:22
 */
namespace HTL3R\megaham_v3\HamsterHomes;
require_once "vendor/autoload.php";

$view = new \TYPO3Fluid\Fluid\View\TemplateView(); //Braucht man dann zum Rendern

$theflat = new TheFlat();
$thepit = new ThePit();
$theroom = new TheRoom();

/*
if(isset($_GET['id'])){
    $page = $_GET['id'];
}else{
    $page = 1;
}
*/
$page = (isset($_GET['id'])) ? $_GET['id'] : 1;

$paths = $view->getTemplatePaths();
switch ($page) {
    case 1:
        $title = 'Home - Megahamster';
        $textseiteninhalt = 'Hallo und Herzlich wilkommen auf der MEGAHAMSTER Website';
        $paths->setTemplatePathAndFilename(__DIR__ . '/Resources/Private/Templates/index.html');
        break;
    case 2:
        $title = 'Home - Impressum';
        $textseiteninhalt = 'Hier seht ein Impressum-Text';
        $paths->setTemplatePathAndFilename(__DIR__ . '/Resources/Private/Templates/datenimpressum.html');
        break;
    case 3:
        $title = 'Home - Datenschutz';
        $textseiteninhalt = 'Hier seht ein Datenschutz-Text';
        $paths->setTemplatePathAndFilename(__DIR__ . '/Resources/Private/Templates/datenimpressum.html');
        break;
}

$view->assignMultiple([
    'inhalt' => $textseiteninhalt,
    'title' => $title,
    'content' => [
        [
            'name' => 'The Pit',
            'description' => $thepit->outputProductInfo(),
            'price' => $thepit->getPrice(),
            'info' => $thepit->getSpecialEquipment()
        ],
        [
            'name' => 'The Flat',
            'description' => $theflat->outputProductInfo(),
            'price' => $theflat->getPrice(),
            'info' => $theflat->getSpecialEquipment()
        ],
        [
            'name' => 'The Room',
            'description' => $theroom->outputProductInfo(),
            'price' => $theroom->getPrice(),
            'info' => $theroom->getSpecialEquipment()
        ]
    ]
]);


$output = $view->render();
echo $output;