<?php
declare(strict_types=1);

namespace AbstractFactory;


class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }

}