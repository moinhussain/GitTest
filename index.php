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

           echo "this is code added in master";

            echo "code added in branch";

            return $a + $b;
        }
        function subtract($a, $b){
           return $a - $b; 
        }
        function divide($a,$b){
           return $a/$b;
        }
        function multiplication($a,$b){
            return $a * $b;
        }
        function newFunction(){
        }
        
         ?>
    </body>
</html>
