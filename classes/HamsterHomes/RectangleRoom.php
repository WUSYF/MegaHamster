<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 15.10.18
 * Time: 10:24
 */

namespace HTL3R\megaham_v3\HamsterHomes;


abstract class RectangleRoom implements \JsonSerializable
{
    protected $width, $height, $length;

    function __construct($width, $height, $length) {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setLength(int $length)
    {
        $this->length = $length;
    }

    function calculateArea(): float
    {
        return $this->width * $this->length;
    }

    public function jsonSerialize()
    {
        return[
            'width' => $this->width,
            'height' => $this->height,
            'length' => $this->length,
        ];
    }
}