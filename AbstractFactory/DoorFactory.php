<?php
declare(strict_types=1);

namespace AbstractFactory;


interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;

}