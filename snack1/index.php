<?php
$squadre = [
    [
        "squadraCasa" => "Verdi",
        "squadraOspite" => "Rossi",
        "puntiCasa" => 35,
        "puntiOspite" => 75,
    ],
    [
        "squadraCasa" => "Gold",
        "squadraOspite" => "Silver",
        "puntiCasa" => 59,
        "puntiOspite" => 45,
    ],
    [
        "squadraCasa" => "Star",
        "squadraOspite" => "Moon",
        "puntiCasa" => 64,
        "puntiOspite" => 25,
    ],
];

for($i=0; $i<count($squadre); $i++){
    echo $squadre[$i]["squadraCasa"]." - ". $squadre[$i]["squadraOspite"]." | ".$squadre[$i]["puntiCasa"]." - ".$squadre[$i]["puntiOspite"]."<br>";
};

