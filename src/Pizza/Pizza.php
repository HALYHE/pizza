<?php

namespace PizzaLibrary\Pizza;
abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    protected array $toppings = [];

    abstract public function prepare(): void;

    public function cut(): void
    {
        echo "Разрезаем пиццу по диагонали.\n";
    }
}
