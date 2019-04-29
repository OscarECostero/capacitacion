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
        $this->assertfalse($buscaminas->jugar(3,3));
    }
    public function testNumeroDeMinasCerca()
    {
        $buscaminas= new Buscaminas(5,5);
        $buscaminas->agregarMina(3,3);
        $buscaminas->agregarMina(3,2);

        $this->assertEquals(1,$buscaminas->jugar(3,1));
        $this->assertEquals(2,$buscaminas->jugar(4,2));

    }
    public function testPonerMinaFueraDelTablero()
    {
        $buscaminas= new Buscaminas(5,5);
        $this->assertfalse($buscaminas->agregarMina(6,6));
    }
    public function testSacarMina()
    {
        $buscaminas= new Buscaminas(5,5);
        $buscaminas->agregarMina(3,3);
        $this->asserttrue($buscaminas->sacarMina(3,3));
    }
    public function testGanador()
    {
        $buscaminas= new Buscaminas(5,5);
        $buscaminas->agregarMina(3,3);
        $buscaminas->agregarMina(3,2);
        $buscaminas->sacarMina(3,2);
        $buscaminas->sacarMina(3,3);
        $this->asserttrue($buscaminas->gano());
    }
    public function testTermino()
    {
        $buscaminas= new Buscaminas(5,5);
        $this->assertfalse($buscaminas->terminoDeJugar())
    }

}
//sacarMina  gano terminoDeJugar  jugar  agregarMina