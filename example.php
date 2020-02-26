<?php


use ProductBot;

require_once __DIR__ . '/autoload.php';



$product = new ProductBot();
echo json_encode($product->crawPage("awd"));