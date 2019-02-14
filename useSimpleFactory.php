<?php
$door = \SimpleFactory\DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();