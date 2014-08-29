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
               for ($linha=1;$linha<10;$linha++){
                   if ($linha%2==0){
                       $class="par";
                   }
                   else{
                       $class="impar";
                   }
                   echo "<tr class=$class><td>id</td><td>Nome</td><td>desc</td></tr>";
               }
               
?>


            
            ?>
           </table>
           </body>
        </html>
