<!DOCTYPE html>
<html>
    <head>
        <title>Exercícios
        </title>
        <style type= "text/css">
tr.par{background-color:#CCCCCC;}
tr.impar{background-color:#FAFAFA;}
table{border-collapse:collapse;}
</style>
    </head>
    <body>
        <h1>4.2</h1>
        <p>ex. 1</p>
           <table> 
               
               <?php
               for ($linha=1;$linha<7;$linha++){
                   if ($linha%2==0){
                       $class="par";
                   }
                   else{
                       $class="impar";
                   }
                   echo "<tr class=$class><td>id</td><td>Nome</td><td>desc</td></tr>";
               }
               
?>
               </table>
               <p>ex. 2</p>
        <?php
        $num=13;
        for($i=2;$i<$num;$i++){
        if ($num%$i==0){
        $tipo= "Não é primo";
            }
            else{
                $tipo="Primo";
            }
        }
        echo "$tipo";
        ?>      
               <p>ex. 3</p>
           <?php
           $qtd=5;
           $a=0;
           $b=1;
           for($i=1;$i<$qtd;$i++){
           $soma=$a+$b;
           $a=$b;
           $b=$soma;
          echo "$soma";
           }
          
        
           ?> 
           
           </body>
        </html>
