<?php 


include './vendor/autoload.php';
include 'Drone.php';

use PHPUnit\Framework\TestCase;

final class DroneTest extends TestCase
{
    public function testBateria()
    {
        $drone= new Drone('100');
        $this->assertEquals(100,$drone->cantidadDeBateria());
    }
    public function testSeMueve()
    {
        $drone= new Drone('100');
        $this->assertTrue($drone->mover(2,2));
    }
    public function testRestaBateria()
    {
        $drone= new Drone('100');
        $drone->mover(2,2);
        $this->assertEquals(96,$drone->cantidadDeBateria());
    }
    public function testSePuedeMoverMasQueLaCapacidadDeBateria()
    {
        $drone= new Drone('100');
        $this->assertFalse($drone->mover(50,51));

    }
    public function testCargaLaBateria()
    {
        $drone = new Drone('100');
        $drone->mover(30,10);
        $this->assertEquals(60,$drone->cantidadDeBateria());
        $drone->mover(0,0);
        $this->assertEquals(100,$drone->cantidadDeBateria());

    }
    public function testGuardaElHistorial()
    {
        $drone = new Drone('100');
        $drone->mover(30,10);
        $drone->mover(4,5);
        $drone->mover(2,1);
        $drone->mover(0,0);
        $drone->mover(2,1);
        $this->assertEquals(5,count($drone->historial()));
    }
    public function testSiRepiteLaPosicionNoSeMueve()
    {
        $drone = new Drone('100');
        $drone->mover(30,10);
        $this->assertFalse($drone->mover(30,10));
        //por ser la misma posicion no deberia retornar true ya que no se mueve
    }




}
