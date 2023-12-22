<?php

namespace PizzaLibrary\Pizza;
use PizzaLibrary\Pizza\Pizza;
class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони пицца';
        $this->sauce = 'Томатный';
        $this->toppings = ['Пепперони', 'Моцарелла Сыр', 'Перец'];
    }

    public function prepare(): void
    {
        echo "Название {$this->name}:\n";
        echo "Добавлен соус: {$this->sauce}\n";
        echo "Добавлен топпинг: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Индивидуальный метод нарезки {$this->name}: Нарезано прямоугольниками.\n";
    }
}
