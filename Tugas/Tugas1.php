<?php
    function faktorial($value) {
        if ($value == 0) return 1;
        return $value * faktorial($value - 1);
    }
    $angka=12;
    echo faktorial($angka);
?>