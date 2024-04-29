<?php

class Shape{

    public $ancho;
    public $alto;
    function __construct(int $ancho, int $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }


    
}


class Triangulo extends Shape{
            public function area(){
        return $this->ancho * $this->alto / 2;
    }
    }


class Rectangulo extends Shape{
    public function area(){
        return $this->alto * $this->ancho;
    }
    }

    $triangulo = new Triangulo(3, 5);
    echo $triangulo->area();
    echo "<br>";
    $rectangulo = new Rectangulo(5, 3);
    echo $rectangulo->area();
?>