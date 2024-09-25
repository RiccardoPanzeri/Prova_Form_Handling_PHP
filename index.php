<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prova PHP</title>
    <link href="./pages/style.css" rel="stylesheet">
</head>


<body>
    <a href="pages/pagina_link.php">-----Clicca qui per richiedere una pagina web al server-----</a>
    <h2 class="text">Form che utilizza il metodo HTTP "GET"</h2>
    <form action="pages/form_handler_GET.php" method="get" class="form">
            <div class="formDiv"> 
                <label for="name" class="text">Nome</label>
                <input type="text" id="name" name="name" placeholder="Nome" required>
                <label for="lastName" class="text">Cognome</label>
                <input type="text" id="lastName" name="lastName" placeholder="Cognome" required>
                <button type="submit">Conferma</button>
            </div>    
    </form>
    

    <h2 class="text">Form che utilizza il metodo HTTP "POST"</h2>
    <form action="pages/form_handler_POST.php" method="Post">
            <div class="formDiv">
                <label for="username" class="text">Nome Utente</label>
                <input type="text" id="username" name="username" required>
                <label for="password" class="text">Password</label>
                <input type="password" id="password" name="password" required>
                <p class="text">Sesso: </p>
                <div class="genderDiv">
                    <label for="male" class="text">Maschio</label>
                    <input type="radio" id="male" name="gender" value="Maschio" required>
                    <label for="female" class="text">Femmina</label>
                    <input type="radio" name="gender"  id="female" value="Femmina" required>
                </div>
                <button type="submit">Conferma</button>
            </div>
    </form>
   


   
</body>
</html>