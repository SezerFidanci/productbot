<?php

$productBot = new ProductBot();

$productBot->crawPage('test');

echo json_encode($productBot);