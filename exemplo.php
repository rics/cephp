<?php

require_once "vendor/autoload.php";

use Ricsilva\Cephp\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('87010090');

print_r($resultado);