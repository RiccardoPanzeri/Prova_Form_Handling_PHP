<?php

//controllo che i campi siano stati compilati
if($_GET["name"] == "" || $_GET["lastName"] == ""){
    header("Location: ../index.php"); //riporto l'utente alla pagina iniziale
    exit(1); //interrompo lo script con codice di errore (1)
}
//controllo che il metodo di invio dei dati mediante form sia effettivamente "GET"
if($_SERVER["REQUEST_METHOD"] == "GET"){
    //recupero i dati dalla superglobale $_GET e li assegno a delle variabili
    $name = htmlspecialchars($_GET["name"]); 
    $lastName = htmlspecialchars($_GET["lastName"]);
    
    echo "<h1>Ecco i tuoi dati:</h1><br>Nome: $name<br>Cognome: $lastName";
    
}else{
    exit(1); //interrompo lo script con codice di errore (1)
}

echo "<br><a href='../index.php'>Torna alla homepage</a>";