<?php

namespace App;

class MagicClass
{
    // Магический метод __construct
    public function __construct()
    {
        echo "__construct вызван\n<br>";
    }

    // Магический метод __destruct
    public function __destruct()
    {
        echo "__destruct вызван\n<br>";
    }

    // Магический метод __call
    public function __call($name, $arguments)
    {
        echo "__call вызван для метода '{$name}' с аргументами: " . implode(', ', $arguments) . "\n<br>";
    }

    // Магический метод __get
    public function __get($name)
    {
        echo "__get вызван для '$name'\n<br>";
        return null; // Возвращаем null, как значение по умолчанию
    }

    // Магический метод __set
    public function __set($name, $value)
    {
        echo "__set вызван для '$name' с значением '$value'\n<br>";
    }

    // Магический метод __isset
    public function __isset($name)
    {
        echo "__isset вызван для '$name'\n<br>";
        return false; // Все значения считаем неустановленными
    }

    // Магический метод __unset
    public function __unset($name)
    {
        echo "__unset вызван для '$name'\n<br>";
    }

    // Магический метод __toString
    public function __toString()
    {
        return "__toString вызван\n<br>";
    }

    // Магический метод __invoke
    public function __invoke()
    {
        echo "__invoke вызван\n<br>";
    }

    // Магический метод __sleep
    public function __sleep()
    {
        echo "__sleep вызван\n<br>";
        return []; // Указываем, что ничего не нужно сериализовать
    }

    // Магический метод __wakeup
    public function __wakeup()
    {
        echo "__wakeup вызван\n<br>";
    }
}

?>