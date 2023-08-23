<?php
echo "<h1Array Associativo</h1>";
$idade = array("Adriana"=>18,"Danda"=>17,"Veri"=>23,"cris"=>25);
echo $idade['Adriana']."<br>";
echo $idade['Danda'];
echo "<hr>";
foreach ($idade as $x =>$x_value){
    echo "Key = ".$x.",value=" .$x_value;
    echo "<br>";
}