<?php

require 'vendor/autoload.php';

use App\Storage\SessionStorage as SessionStorage;
use App\Storage\FileStorage as FileStorage;


$store = new FileStorage;
$store->set('name', 'Bellal')->set('age', 19);
// echo $store->startSession()->get('name');
// echo $store->get('name');
// echo $store->get('age');
// echo $store->delete('name');
var_dump($store->all());