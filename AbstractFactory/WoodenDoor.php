<?php
declare(strict_types=1);

namespace AbstractFactory;


class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }

}