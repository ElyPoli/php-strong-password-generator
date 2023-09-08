<?php
// Avvio la sessione
session_start();

// Lunghezza password selezionata
$password_length = $_GET["length"] ?? '0';

// Creo i diversi array separati
$alphabet_lowercase = range('a', 'z');
$alphabet_uppercase = range('A', 'Z');
$number = range(0, 9);
$symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '<', '>', ',', '.', '?', '/'];

// Unisco tutti gli array in uno unico
$array_character_set = array_merge($alphabet_lowercase, $alphabet_uppercase, $number, $symbols);

// Estraggo casualmente tot elementi dall'array totale
$random_password_generated = '';
for ($i = 0; $i < $password_length; $i++) {
    $random_password_generated .= $array_character_set[rand(0, count($array_character_set) - 1)];
}

// Salvo la password generata all'interno della sessione
if(strlen($random_password_generated) == $password_length) {
    $_SESSION['password'] = $random_password_generated;
}
?>