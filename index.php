<?php

for($num=1; $num<=10; $num++)
{
echo "$num &#8259;&nbsp";
}

echo '<br>';
$numere=array(6,4,15,12,36,89,45);
foreach($numere as $items) {
    
    if($items%6==0)
        echo $items.'<br>';
       
    }

echo'<br>';

// Calculul primelor 30 de numere dintr-un sir
$sum =0;


for ($i = 0; $i <= 29; $i++) {
 echo $i . " + ";
}
echo 30;
$sum = 0;

for ($i = 0; $i <= 30; $i++) {
$sum = $sum + $i;
}

echo "=".$sum;

echo '<br>';

// Client banca 

$sumaDepusa = 500;


for ($i = 1; $i <= 5; $i++) {

$soldFinal = $sumaDepusa * pow(1.1, $i);
echo "La sfârșitul anului $i clientul va avea soldul bancar:" . "<br>" . "$soldFinal euro"  . "<br>"."<br>";
}

?>