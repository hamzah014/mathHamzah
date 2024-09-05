<?php
require __DIR__ . '/vendor/autoload.php';
use MathHamzah\Calculator;
use MathHamzah\Currency;
use MathHamzah\Locator;


$mathHamzah = new Calculator();

// echo $mathHamzah->tambah(10,99) . "\n";

$currency = new Currency();

// print_r($currency->convert('BTC','MYR', 1));

// echo "\n";

// print_r($currency->list());

// echo "\n";

// print_r($currency->listCrypto());

// echo "\n";

// $arrayCurrency = [
//     [
//         'from'=> "MYR",
//         'to'=> "IDR",
//     ],
//     [
//         'from'=> "MYR",
//         'to'=> "USD",
//     ]
// ];

// print_r($currency->conversion($arrayCurrency));

$ip = '34.39.131.22';
$ipLocator = new Locator($ip);

echo "\n Complete";
print_r($ipLocator->getAll());
// echo "\n Local";
// print_r($ipLocator->getLocale());
// echo "\n Local";
// print_r($ipLocator->getLanguage());
// echo "\n Lang";
// print_r($ipLocator->getInfo());
// echo "\n info";
// print_r($ipLocator->getCurrency());

