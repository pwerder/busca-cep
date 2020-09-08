<?php

require_once "vendor/autoload.php";

use pauloantonio\buscacep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('04240000');

print_r($resultado);