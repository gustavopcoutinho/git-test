git-test
========

<b> Bem vindos </b> a TEC WEB 2 <br><br>
<i>Gustavo Coutinho</i>
<?php

$p1=5.5;
$m1=8;
$m2=7.5;
$proj1=4;
$proj2=9.5;
$proj3=6;
$proj4=8;
$trabF=8.8;
$proc=7.3;
$pF=6;
$mI=((30*$p1)+(10*$m1)+(10*$m2)+(5*$proj1)+(5*$proj2)+(5*$proj3)+(5*$proj4)+(10*$trabF)+($proc*20))/100;
if ($mI>=7.5){
    $mF=$mI;
    echo"Aprovado sem Prova Final.\n Parabéns! Boas Férias"+($mF);   
}
else{
    $mF=$mI+$pF/2;
if($mF>=5){
    echo " Aprovado com prova final. /n Agora já pode descansar tranquilo."+($mF);
}
 else{
     echo "Reprovado. /n Não foi dessa vez. Ano que vem tem mais TWII. /n Média intermediária: "+($mI)+" /n Média final: "+($mF);
 }   
}
?>

