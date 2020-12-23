<?php
    function harga(&$value) {
        if ($value <= 10) 
        {
          return 300*$value;
        }
        elseif ($value <= 20)
        {
          return 500*$value;
        } else
        return $value * 700;
    }
    $nama="Ahmad Auzan Varian Syahputra";
    echo "Harga bet = ";
    echo harga(strlen($nama));
?>