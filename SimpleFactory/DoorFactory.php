<?php
declare(strict_types=1);

namespace SimpleFactory;

class DoorFactory
{

    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}