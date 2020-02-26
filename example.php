<?php

require_once __DIR__ . '/autoload.php';
use ProductBot as PB;


echo json_encode(PB::crawPage("awd"));