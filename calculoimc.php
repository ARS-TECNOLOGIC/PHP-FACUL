<?php
$imc = 18.6;
faixaimc($imc);

function faixaimc($valorimc)
{
    $faixaClass = array("18.5" => "Magreza", "24.9" => "Saudável", "29.9" => "Sobrepeso", "34.9" => "Obesidade Grau I", "39.9" => "Obesidade Grau II", "40.00" => "Obesidade Grau III");

    foreach ($faixaClass as $valor => $desc) {

        if ($valorimc >= 40.00) {
            $desc = "Obesidade Grau III";
            echo "Atenção, seu IMC é " . $valorimc . ", e você está classificado com: " . $desc;
            break;
        } else if ($valorimc <= floatval($valor)) {
            echo "Atenção, seu IMC é " . $valorimc . ", e você está classificado com: " . $desc;
            break;
        }
    }
}
?>