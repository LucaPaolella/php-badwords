<?php


//Inserisco per vedere se funziona tutto bene:
var_dump($_POST);

?>

<!--Inizio HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Ciao! Benvenuto nel censuratore di cose accuratissimo:</h1>

    <form action="badwords.php" method="POST">
        <input type="text" name="goodwords" placeholder="parola da non censurare">
        

        <input type="text" name="badwords" placeholder="parola da censurare">
        <button>Invia</button>
    </form>



<div></div>
    
</body>
</html>