<?php

$imc = 22.8;

retfaixa($imc);

function retfaixa($imc){
    $faixaimc = [
        ["min"=> 0 ,"max" =>18.5 ,"desc" =>"magreza"],
        ["min"=>18.51 ,"max" =>24.9 ,"desc" => "saudável"],
        ["min"=>25 ,"max" =>29.9 ,"desc" => "sobrepeso"],
        ["min"=>30 ,"max" => 34.9 ,"desc" => "obesidade Grau I"],
        ["min"=>35 ,"max" =>39.9 ,"desc" =>"obesidade Grau II"],
        ["min"=>40 ,"max" =>1000000 ,"desc" => "obesidade Grau III"]
    ];
        foreach($faixaimc as $linha =>$valor){

                if($imc >= $valor["min"] and $imc <= $valor["max"]){
                    echo "Atenção, seu IMC é ".$imc.", e você está classificado
                    como ".$valor["desc"].".";

                }
            }
        }


?>