<?php
// dichiarare variabile
// $nome = "Ludovico";

// variabili superglobali:
$nome = $_POST["nome"];

//ATTENZIONE: lo scope delle variabili in php è diverso da quello in JS,
//le variabili che usiamo in una funziona sono riconosciute solo in quella funzione!
// a meno che non richiamiamo ina variabile globale

function salutaNome()
{
    $nome = "Pippo";
    echo $nome;
}

salutaNome();
echo $nome;

// ora uso il sistema delle variabili globali
$cognome = $_POST["cognome"];

function salutaCognome()
{
    $GLOBALS["cognome"] = "Rossi";
    echo $GLOBALS["cognome"];
}

salutaCognome();
echo $cognome;

//costante, non sono variabili nel tempo
function stampaIndirizzo()
{
    define("INDIRIZZO", "Via Orfanotrofio");
    echo INDIRIZZO;
}
//non posso dichiarare una costante con const all'interno di una funzione
const ADDRESS = "Via Italia";

stampaIndirizzo();
echo ADDRESS;
