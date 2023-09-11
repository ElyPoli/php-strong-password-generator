<?php
// Avvio la sessione
session_start();

// Dati forniti dall'utente
$password_length = $_GET["length"] ?? '0';
$insert_numbers = $_GET["number"] ?? null;
$insert_lowercase = $_GET["lowercase"] ?? null;
$insert_uppercase = $_GET["uppercase"] ?? null;
$insert_symbols = $_GET["symbols"] ?? null;
$repeat = $_GET["repeat"] ?? null;

// Creo i diversi array separati
$alphabet_lowercase = range('a', 'z');
$alphabet_uppercase = range('A', 'Z');
$number = range(0, 9);
$symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '<', '>', ',', '.', '?', '/'];

// Verifico quali set di caratteri ha selezionato di includere l'utente e gli inserisco nell'array unico
$array_character_set = [];
if ($insert_numbers === "on") {
    $array_character_set = array_merge($array_character_set, $number);
}
if ($insert_lowercase === "on") {
    $array_character_set = array_merge($array_character_set, $alphabet_lowercase);
}
if ($insert_uppercase === "on") {
    $array_character_set = array_merge($array_character_set, $alphabet_uppercase);
}
if ($insert_symbols === "on") {
    $array_character_set = array_merge($array_character_set, $symbols);
}

// Estraggo casualmente tot elementi dall'array totale (se questo non è vuoto)
$random_password_generated = '';
if (!empty($array_character_set)) {
    $array_length = count($array_character_set);

    $used_characters = []; // Creo un array per tenere traccia dei caratteri estratti

    for ($i = 0; $i < $password_length; $i++) {
        // Se tutti i caratteri disponibili sono già stati estratti esco dal ciclo
        if (count($used_characters) === $array_length) {
            break;
        }

        $new_value_index = rand(0, $array_length - 1); // Genero un nuovo valore casuale
        $new_value = $array_character_set[$new_value_index];

        // Verifico se l'utente ha selezionato che non vuole caratteri ripetuti
        if ($repeat !== "on") {
            // Genero nuovi valori fino a che non ne trovo uno diverso
            while (in_array($new_value, $used_characters)) {
                $new_value_index = rand(0, $array_length - 1);
                $new_value = $array_character_set[$new_value_index];
            }
            $used_characters[] = $new_value;
        }
        $random_password_generated .= $new_value;
    }
}

// Salvo la password generata all'interno della sessione
if (strlen($random_password_generated) == $password_length) {
    $_SESSION['password'] = $random_password_generated;
}