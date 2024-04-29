<?php


$dadosEnJuego = 5;
$dados = [$dadosEnJuego];
for ($i = 0; $i < $dadosEnJuego; $i++) {
    $dados[$i] = new PokerDice;
    $dados[$i]->throw();
    echo $dados[$i]->shapeName() . "<br>";
}

$totalDeTiradas = 0;
for ($i = 0; $i < $dadosEnJuego; $i++) {
    $totalDeTiradas += $dados[$i]->getTiradasTotales();
}

echo "Total de tiradas: " . $totalDeTiradas;





class PokerDice
{

    private $figuras = ["A", "K", "Q", "J", "7", "8"];
    private $ultimaTirada = "";
    private $tiradasTotales = 0;

    public function throw()
    {
        $this->ultimaTirada = array_rand($this->figuras);
        $this->tiradasTotales++;
        return $this->ultimaTirada;
    }

    public function shapeName()
    {
        return $this->figuras[$this->ultimaTirada];
    }

    public function getTiradasTotales()
    {
        return $this->tiradasTotales;
    }
}


?>