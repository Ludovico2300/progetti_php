<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial PHP 2021</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding: 40px;
        }

        input {
            margin: 10px 0;
        }
    </style>
</head>

<?php
$nome = "Nome";
?>

<body>
    <h1>Esempio</h1>
    <form method="post" action="php/esempio.php">
        <!-- il metodo post serve per mandare i dati in maniera "nascosta", più sicuro -->
        <!-- in action indichiamo la pagina che gestisce i dati che inseriamo e mandiamo  -->
        <label for="nome"><?php echo $nome; ?></label>
        <input id="nome" type="text" name="nome" placeholder="Inserisci Nome">
        <label for="conome">Cognome</label>
        <input id="cognome" type="text" name="cognome" placeholder="Inserisci Cognome">
        <input type="submit" value="Invia dati">
    </form>
</body>

</html>