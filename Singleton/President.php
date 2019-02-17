<?php
declare(strict_types=1);

namespace Singleton;

final class President
{
    private static $instance;

    private function __construct()
    {
        // Прячем конструктор
    }

    public static function getInstance(): President
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
        // Отключаем клонирование
    }

    private function __wakeup()
    {
        // Отключаем десериализацию
    }

}