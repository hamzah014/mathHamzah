<?php
require __DIR__ . '/vendor/autoload.php';
use MathHamzah\Calculator;
use MathHamzah\Currency;


$mathHamzah = new Calculator();

echo $mathHamzah->tambah(10,99) . "\n";

$currency = new Currency();

print_r($currency->convert('BTC','MYR', 1));

echo "\n";

print_r($currency->list());

echo "\n";

print_r($currency->listCrypto());

echo "\n";

$arrayCurrency = [
    [
        'from'=> "MYR",
        'to'=> "IDR",
    ],
    [
        'from'=> "MYR",
        'to'=> "USD",
    ]
];

print_r($currency->conversion($arrayCurrency));