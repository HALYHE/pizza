<?php

require_once 'vendor/autoload.php';

use PizzaLibrary\PizzaStore\NewYorkPizzaStore;
use PizzaLibrary\PizzaStore\MoscowPizzaStore;

$nyStore = new NewYorkPizzaStore();
$moscowStore = new MoscowPizzaStore();

echo "Заказ сырной пиццы в New York:\n";
$nyCheesePizza = $nyStore->orderPizza('сыр');
echo "\n";

echo "Заказ пепперони в Moskow:\n";
$moscowPepperoniPizza = $moscowStore->orderPizza('пепперони');
echo "\n";

echo "Выдача сырной пиццы в Moskow из магазина:\n";
echo get_class($nyCheesePizza) . "\n\n";

echo "Выдача пепперони в Moskpw:\n";
echo get_class($moscowPepperoniPizza) . "\n\n";
