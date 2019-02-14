<?php
/**
 * Created by PhpStorm.
 * User: tim_get_me
 * Date: 14.02.2019
 * Time: 21:44
 */

namespace AbstractFactory;


class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }

}