<?php
 $nameUtente = $_GET['name'];
 $mailUtente = $_GET['mail'];
 $mailAge= $_GET['age'];

echo strlen($nameUtente);

if(strlen($nameUtente)>3 && strpos($mailUtente , '@') && strpos($mailUtente , '.') && is_numeric($mailAge)) {
    echo "Accesso riuscito";
}
else{
    echo "Accesso negato";
}