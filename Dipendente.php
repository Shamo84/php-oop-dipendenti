<?php
class Dipendente {
  protected $id;
  protected $nome;
  protected $cognome;
  protected $numPrevSoc;

  function __construct($_id, $_nome, $_cognome, $_numPrevSoc)
  {
    $this->id = $_id;
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->numPrevSoc = $_numPrevSoc;
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
      $this->numPrevSoc
    ];

    return $array;
  }
}
