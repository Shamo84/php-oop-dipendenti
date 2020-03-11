<?php require_once "Dipendente.php";


class Dirigente extends Dipendente
{
  protected $numUfficio;
  protected $telAziendale;
  protected $autoAziendale;

  function __construct($_id, $_nome, $_cognome, $_numPrevSoc, $_numUfficio)
  {
    parent::__construct($_id, $_nome, $_cognome, $_numPrevSoc);
    $this->numUfficio = $_numUfficio;
  }
  public function SetValue($value, $string)
  {
    $this->$value = $string;
  }
  public function GetValue($_value)
  {
    return $this->$_value;
  }
  public function Print()
  {
    $array = [
      $this->id,
      $this->nome,
      $this->cognome,
      $this->numPrevSoc,
      $this->numUfficio
    ];

    return $array;
  }
}
