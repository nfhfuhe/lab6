<?php
require_once('vendor/autoload.php');

use lab6\DodoPizaStore;

$pizaStore = new DodoPizaStore();
$peperoniPiza = $pizaStore->orderPiza("peperoni");
echo PHP_EOL;
$gawaiPiza = $pizaStore->orderPiza("gawai");
echo PHP_EOL;
$asortiPiza = $pizaStore->orderPiza("asorti");