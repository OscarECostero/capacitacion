<?php

require './vendor/autoload.php';

class Ahorcado
{
  private $palabra;
  private $intentos;

  public function __construct($palabra, $intentos) {
    $this->palabra = $palabra;
    $this->intentos = $intentos;
  }
  public function damePalabra()
  {
    return $this->palabra;
  }

  public function dameIntentosRestantes() 
  {
    return $this->intentos;
  }

  public function mostrar()
  {
    $arraypalabra=str_split($this->palabra);
    foreach($arraypalabra as $letra){
   ;
    }

  }
  public function pasarLetra($letra)
  {
    $arraypalabra=str_split($this->palabra);

    foreach ($arraypalabra as $value) {
      if($value == $letra){
        $value=$letra;
      }
    }

  }
  public function perdio()
  {
    if($this->intentos == 0){
      return true;
    }else{return false;}

  }
  public function gano()
  {
    
  }
}
$new= new Ahorcado('palabra',5);
$new->mostrar();
$new->pasarLetra('l');