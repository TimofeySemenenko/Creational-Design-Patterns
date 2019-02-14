<?php
/**
 * Created by PhpStorm.
 * User: tim_get_me
 * Date: 14.02.2019
 * Time: 21:45
 */

namespace AbstractFactory;


interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;

}