<?php
/**
 * Created by PhpStorm.
 * User: tim_get_me
 * Date: 14.02.2019
 * Time: 21:45
 */

namespace AbstractFactory;


class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }

}