<?php
 $nameUtente = $_GET['name'];
 $mailUtente = $_GET['mail'];
 $mailAge= $_GET['age'];


// if(strlen($nameUtente)>3 && strpos($mailUtente , '@') && strpos($mailUtente , '.') && is_numeric($mailAge)) {
//     echo "Accesso riuscito";
// }
// else{
//     echo "Accesso negato";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso utente</title>
</head>
<body>
<h3>Accesso account</h3>
<form action="index.php" method="get">
Nome: <input type="text" name='name' placeholder="Inserisci il tuo nome">
Mail: <input type="mail" name='mail' placeholder="Inserisci la tua mail">
Età: <input type="text" name='age' placeholder="Inserisci la tua età">
<input type="submit">

</form>

 <?php 
 if(strlen($nameUtente)>3 && strpos($mailUtente , '@') && strpos($mailUtente , '.') && is_numeric($mailAge)) {  
    echo "Accesso riuscito";
}
else{
    echo "Accesso negato";
}
 ?>

    
</body>
</html>