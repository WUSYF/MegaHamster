<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 15.10.18
 * Time: 10:25
 */

namespace HTL3R\megaham_v3\HamsterHomes;


class TheRoom extends RectangleRoom implements Room
{

    private $price, $specialEquipment;

    function __construct() {
        parent::__construct(50, 50, 80);
        $this->specialEquipment = [];
        $this->price = 49;
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

    function outputProductInfo()
    {
        return "Our Domain ‘The Room’ is the basic choice of real estate for a hamster owner. It features a length of " . parent::getLength() . "cm, a width of ". parent::getWidth() ."cm and a height of ". parent::getHeight() ." cm. It is available for the low price of EUR". $this->price .",-";
    }

    public function jsonSerialize(){
        return parent::jsonSerialize() + [
                'name' => 'The Room',
                'equipment' => $this->specialEquipment,
                'preis' => $this->price,
        ];
    }
}