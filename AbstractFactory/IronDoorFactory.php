<?php
/**
 * Created by PhpStorm.
 * User: tim_get_me
 * Date: 14.02.2019
 * Time: 21:46
 */

namespace AbstractFactory;


class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }

}