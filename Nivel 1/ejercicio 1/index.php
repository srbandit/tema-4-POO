<?php

class Employee
{
    public $nombre = "";
    public $sueldo = 0;


    public function initialize(String $nombre, int $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function imprimirData()
    {
        echo "Nombre: $this->nombre" . "<br>";
        if ($this->sueldo > 6000) {
            echo "Debe pagar impuestos";
        }else{
            echo "No debe pagar impuestos";
        }
    }

  
}
  
$empleado = new Employee();
$empleado2 = new Employee();

$empleado->initialize("Pedro", 5000);
$empleado->imprimirData();
echo "<br>";
$empleado2->initialize("José", 7000);
$empleado2->imprimirData();