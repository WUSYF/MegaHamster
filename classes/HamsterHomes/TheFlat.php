<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 15.10.18
 * Time: 10:24
 */

namespace HTL3R\megaham_v3\HamsterHomes;


class TheFlat extends RectangleRoom implements Room
{
    private $specialEquipment, $price;

    function __construct()
    {
        parent::__construct(80, 80, 120);
        $this->specialEquipment = ["Food jars"];
        $this->price = 149;
    }

    function getSpecialEquipment()
    {
        return $this->specialEquipment;
    }

    function getPrice(): int
    {
        return $this->price;
    }

    function setPrice(int $price)
    {
        $this->price = $price;
    }

    function outputProductInfo()
    {
        return "Our Domain ‘The Flat’ is the best choice of real estate for a hamster owner. It features a length of " . parent::getLength() . "cm, a width of ". parent::getWidth() ."cm and a height of ". parent::getHeight() ." cm. It is available for the low price of EUR". $this->price .",-";
    }

    public function jsonSerialize(){
        return parent::jsonSerialize() + [
                'name' => 'The Flat',
                'equipment' => $this->specialEquipment,
                'preis' => $this->price,
            ];
    }
}