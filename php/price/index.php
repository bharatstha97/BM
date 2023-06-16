<?php

require __DIR__ . '/../PriceRepo.php';


$priceRepo = new PriceRepo();

echo "greater price list</br>";
var_dump($priceRepo->getGreaterPrice());
echo "</br>";

echo "sum of greater price list</br>";
var_dump($priceRepo->getSumPrice());
