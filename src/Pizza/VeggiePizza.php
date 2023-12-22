<?php

namespace PizzaLibrary\Pizza;

use PizzaLibrary\Pizza\Pizza;
class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Вегитарианская пицца';
        $this->sauce = 'Песто соус';
        $this->toppings = ['Томаты', 'Лук', 'Грибы', 'Шпинат', 'Плавленный сыр'];
    }

    public function prepare(): void
    {
        echo "Название {$this->name}:\n";
        echo "Добавлен соус: {$this->sauce}\n";
        echo "Добавлен топпинг: " . implode(', ', $this->toppings) . "\n";
    }
}
