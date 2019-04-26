<?php
require 'CasiBuscaMinas.php';
require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;


final class BuscaMinasTest extends TestCase
{
   
    public function testExisteLaClase()
    {
        $this->assertTrue(class_exists("BuscaMinas"));
    }
    public function testAgregaMinas()
    {
        $buscaminas= new Buscaminas(5,5);
        $buscaminas->agregarMina(3,3);
        $this->assertfalse(false, $buscaminas->jugar(3,3));
    }
    public function testPuedeJugar()
    {
        $buscaminas= new Buscaminas(5,5);
        $buscaminas->agregarMina(3,3);
        $this->assertfalse(true, $buscaminas->jugar(3,3));
    }

}