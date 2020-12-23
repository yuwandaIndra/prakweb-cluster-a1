<?php  
function pertambahan($bil1,$bill2)  
{  
    return ($bil1+$bill2);  
}
function perkalian($bil1,$bill2) {
  return($bil1*$bill2);
} 
function pembagian($bil1,$bill2){
  return($bil1/$bill2);
}
function pengurangan($bil1,$bill2){
  return($bil1-$bill2);
}
function modulus($bil1,$bill2){
  return($bil1%$bill2);
}
$bil1=20;
$bill2=5;
echo"bilangan 1= $bil1</br>
     bilangan 2= $bill2</br>
     </br> Berikut merupakan hasil dari setiap operasi</br>
     PENJUMLAHAN</br>
     Operator : + </br>
     Hasil= ";
echo pertambahan($bil1,$bill2)."</br>";
echo"</br> Berikut merupakan hasil dari setiap operasi</br>
     PENGURANGAN</br>
     Operator : - </br>
     Hasil= ";
echo pengurangan($bil1,$bill2)."</br>";
echo"</br> Berikut merupakan hasil dari setiap operasi</br>
     PERKALIAN</br>
     Operator : * </br>
     Hasil= ";
echo perkalian($bil1,$bill2)."</br>";
echo"</br> Berikut merupakan hasil dari setiap operasi</br>
     PEMBAGIAN</br>
     Operator : / </br>
     Hasil= ";
echo pembagian($bil1,$bill2)."</br>";
echo"</br> Berikut merupakan hasil dari setiap operasi</br>
     MODULUS</br>
     Operator : % </br>
     Hasil= ";
echo modulus($bil1,$bill2);
?>  