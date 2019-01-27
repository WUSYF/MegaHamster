<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 15.10.18
 * Time: 10:25
 */
namespace HTL3R\megaham_v3\HamsterHomes;

class ThePit implements Room, \JsonSerializable
{

    private $specialEquipment, $price, $length;

    function __construct() {
        $this->length = 20;
        $this->specialEquipment = ["Hamster training gloves", "Hamster punching sack"];
        $this->price = 69;
    }

    public function getPrice(): int {
        return $this->price;
    }
    public function setPrice(int $price){
        $this->price = $price;
    }

    function getSpecialEquipment()
    {
        return $this->specialEquipment;
    }

    function calculateArea(): float
    {
        return 2 * (sqrt(2) + 1) * $this->length * $this->length;
    }

    function outputProductInfo()
    {
        return "Our Domain ‘The Pit’ is the basic choice of hamster training space for a hamster owner. It features a side-length of " . $this->length . "cm. It is available for the low price of EUR". $this->price .",-";

    }
    public function jsonSerialize(){
        return[
            'length' => $this->length,
            'name' => 'The Pit',
            'equipment' => $this->specialEquipment,
            'preis' => $this->price,
            ];
    }
}