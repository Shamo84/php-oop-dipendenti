<?php require_once "Dipendente.php";

$giacomo = new Dipendente(234, "giacomo", "poretti", "sf3948f");


$giacomo->SetValue("id", 456);

var_dump($giacomo->GetValue("id"));
var_dump($giacomo->Print());
