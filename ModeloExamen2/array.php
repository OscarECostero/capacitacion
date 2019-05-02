<?php
 
$peliculas = array(
    array('nombre'=>'matrix', 'tiempo'=>120),
    array('nombre'=>'matrix2', 'tiempo'=>320),
    array('nombre'=>'matrix3', 'tiempo'=>140),
    array('nombre'=>'tenes un email', 'tiempo'=>20),
    array('nombre'=>'tomy regresa', 'tiempo'=>10),
);
$pelicula=array();
$tiempo=0;

foreach ($peliculas as $value) {
    if($value['tiempo'] > $tiempo){
        $tiempo=$value['tiempo'];
        $pelicula = $value;
      //  $pelicula []= $value; va guardando en el array, sin los corchetes la va pisando y guarda la ultima

    }
}
print_r($pelicula);
