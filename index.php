<?php
require_once "Dipendente.php";
require_once "Dirigente.php";

$giacomo = new Dipendente(234, "giacomo", "poretti", "sf3948f");
$michele = new Dirigente(33, "michele", "capretti", "sf568ik", 5);

$giacomo->SetValue("id", 456);

var_dump($giacomo->GetValue("id"));
var_dump($giacomo->Print());

var_dump($michele->GetValue("id"));
var_dump($michele->Print());
