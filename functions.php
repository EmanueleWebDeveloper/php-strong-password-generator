<?php 
// Definizione della funzione per generare la password
function PasswordGenerata($length) {
    // Verifica se la richiesta è di tipo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Definizione dei caratteri utilizzabili nella password
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        // Inizializzazione della stringa della password
        $password = '';
        // Calcolo della lunghezza dei caratteri utilizzabili
        $charsLength = strlen($chars) - 1;
        // Ciclo per la lunghezza specificata per generare la password
        for ($i = 0; $i < $length; $i++){
            // Aggiunta di un carattere casuale dalla stringa dei caratteri
            $password .= $chars[rand(0, $charsLength)];
        }
        // Restituzione della password generata
        return $password;
    }
}
