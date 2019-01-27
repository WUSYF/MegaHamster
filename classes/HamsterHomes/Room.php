<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 14.10.18
 * Time: 22:24
 */
namespace HTL3R\megaham_v3\HamsterHomes;

interface Room
{
    function getSpecialEquipment();
    function getPrice(): int;
    function setPrice(int $price);
    function calculateArea(): float;
    function outputProductInfo();
    public function jsonSerialize();
}