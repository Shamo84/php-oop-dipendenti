<?php require_once "Dipendente.php"


class Dirigente extends Dipendente
{
  protected $numUfficio;
  protected $telAziendale;
  protected $autoAziendale;

  function __construct($_id, $_nome, $_cognome, $_NumPrevSoc, $_numUfficio)
  {
    parent::__construct($_id, $_nome, $_cognome, $_NumPrevSoc);
    $this->numUfficio = $_numUfficio;
  }
}
