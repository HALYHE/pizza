<?php

namespace PizzaLibrary\PizzaStore;

use PizzaLibrary\Pizza\CheesePizza;
use PizzaLibrary\Pizza\PepperoniPizza;
use PizzaLibrary\Pizza\Pizza;

class MoscowPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'сыр') {
            return new CheesePizza();
        } elseif ($type === 'пепперони') {
            return new PepperoniPizza();
        } else {
            throw new \InvalidArgumentException("ошибка: $type");
        }
    }
}
