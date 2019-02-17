<?php
declare(strict_types=1);

namespace AbstractFactory;


class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }

}