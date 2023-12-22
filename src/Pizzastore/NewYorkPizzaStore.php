<?php

namespace PizzaLibrary\PizzaStore;

use PizzaLibrary\Pizza\CheesePizza;
use PizzaLibrary\Pizza\PepperoniPizza;
use PizzaLibrary\Pizza\VeggiePizza;
use PizzaLibrary\Pizza\Pizza;

class NewYorkPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'сыр') {
            return new CheesePizza();
        } elseif ($type === 'пепперони') {
            return new PepperoniPizza();
        } elseif ($type === 'вегетарианская') {
            return new VeggiePizza();
        } else {
            throw new \InvalidArgumentException("Ошибка: $type");
        }
    }
}
