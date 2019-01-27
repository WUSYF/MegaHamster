<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 14.10.18
 * Time: 22:24
 */

include "./classes/RectangleRoom.php";
include "./classes/Room.php";
include "./classes/TheFlat.php";
include "./classes/ThePit.php";
include "./classes/TheRoom.php";

echo "Hello Hamster<br>";
/*
$x = new TheFlat();
$x->outputProductInfo();
echo "<br>";
var_dump($x->getSpecialEquipment());
echo "<br><br><br>";

$y = new TheRoom();
$y->outputProductInfo();
echo "<br>";
var_dump($y->getSpecialEquipment());
echo "<br><br><br>";

$z = new ThePit();
$z->outputProductInfo();
echo "<br>";
var_dump($z->getSpecialEquipment());
echo "<br><br><br>";
*/

switch ($_id) {
    case 1:
        $x = new TheFlat();
        $x->outputProductInfo();
        echo "<br>";
        $y = new TheRoom();
        $y->outputProductInfo();
        echo "<br>";
        $z = new ThePit();
        $z->outputProductInfo();
        break;
    case 2:
        echo "<h3>Adresse: Rennweg 89b, Wien</h3>";
        echo "<br>";
        echo "<h1>Tel: 62457304</h1>";
        break;
    case 3:
        echo "Wir klauen deine Daten eh nicht!";
        break;
}