

<?php

class Pc
{

public $gpu;
public $cpu;
public $fan;

public function calculateSubTotal() {

    $totalPrice = $this->gpu + $this->cpu + $this->fan;
    return $totalPrice;

}

}

$pc = new Pc();

$pc-> gpu = "10";
$pc-> cpu = "20";
$pc-> fan = "30"; 


$totalPrice = $pc->calculateSubTotal();
var_dump($totalPrice)

?>