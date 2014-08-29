<!DOCTYPE html>

<html>
    <head> <title>4.1</title> </head>
    <body>
          <p>Exercício 4.1</p>      <?php
$p1=4.8;
$m1=7;
$m2=6;
$pr1=3;
$pr2=7;
$pr3=8.3;
$pr4=6.5;
$proc=4.8;
$tF=9;
$pF=6;

$mI=30*$p1+10*$m1+10*$m2+5*$pr1+5*$pr2+5*$pr3+5*$pr4+20*$proc+10*$tF;
if($mI>=7.5){
    $mF=$mI;
    echo "Aprovado sem prova final.";
}
else{
    $mF=($mI+$pF)/2;
    if($mF>=6){
        echo " Aprovado com prova final.";
    }
    else {
        echo " Reprovado.";
    }
}

?>
    </body>

   
</html>