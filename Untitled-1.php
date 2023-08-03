<?php
class Fruta {
  // atributos
  private $nome;
  public $cor;
  // metodos
  function __construct($nome, $cor)
  {
    $this->nome = $nome;
    $this->cor = $cor;
  }
  function set_name($nome){
    $this->nome = $nome;
    }
  function set_cor($cor){
    $this->cor = $cor;
    }
  function get_name(){
    return $this->nome;
  }
  function get_cor(){
    return $this->cor;
  }
}

$maca = new Fruta("maca_da_eva", "vermelha");
/* $maca->set_name("maca_da_eva");
$vermelha = new Fruta();
$vermelha->set_cor("vermelha"); */
//echo $maca->nome;
echo "</br>".$maca->get_name();
echo "</br>".$maca->get_cor();
?> 
