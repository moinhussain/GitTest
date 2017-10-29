<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        function add($a,$b){

            return $a + $b;
        }
        function subtract($a, $b){
            echo "subtreact changes";
           return $a - $b; 
        }
        function divide($a,$b){
            echo "divide modifired";
           return $a/$b;
        }
        function multiplication($a,$b){

            return $a * $b *2;

            echo "Multiplicatio function";
           

        }
        function newFunction(){
            echo "new function";

            $subtactResult = subtract(10, 2);
            echo $subtactResult;

            $a = add(10,2);
            echo $a;

        }
        
         ?>
    </body>
</html>
