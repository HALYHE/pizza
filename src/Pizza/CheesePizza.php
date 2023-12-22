<?php

namespace PizzaLibrary\Pizza;
use PizzaLibrary\Pizza\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Сырная пиццы';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла сыр'];
    }

    public function prepare(): void
    {
        echo "Название: {$this->name}\n";
        echo "Добавлен соус: {$this->sauce}\n";
        echo "Добавлен топпинг: " . implode(', ', $this->toppings) . "\n";
    }
}
