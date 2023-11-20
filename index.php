<?php 

// codigo certo

$true = true;
$j = 0;
function obaoba(){
    return "obaaa<br>";
}


while($true){
    $j++;
    echo obaoba();
    if($j == 10)
        $true = false;
}


header('Location: aguadoce.html');