<?php

//controllo che i campi di input non siano vuoti
if($_POST["username"] === ""|| $_POST["password"] === "" || $_POST["gender"] === ""){
    header("Location: ../index.php");//reindirizzo l'utente alla homepage
    exit(1); //interrompo lo script con codice di errore
}


//controllo che il metodo HTTP usato dal form sia effettivamente POST
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $gender = htmlspecialchars($_POST["gender"]);

    echo "<h2>Ecco i tuoi dati:</h2><br>Nome Utente: $username<br>Password: $password<br>Sesso: $gender";
}else{
    header("Location: ../index.php");//reindirizzo l'utente alla homepage
    exit(1); // interrompo lo script con codice di errore

}   

echo "<br><a href=\"../index.php\">Torna alla homepage</a>";