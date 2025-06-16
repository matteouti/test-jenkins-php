<?php
// Fonctions utilitaires

function afficherMessage($message, $type = 'info') {
    $classes = [
        'info' => 'info',
        'success' => 'success',
        'error' => 'error'
    ];
    
    $class = $classes[$type] ?? 'info';
    return "<div class='$class'>$message</div>";
}

function testerConnexionDB() {
    // Simulation d'un test de connexion
    return true;
}

function validerEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Test simple pour Jenkins
function executerTests() {
    $tests = [
        'Test Calcul' => (2 + 2 === 4),
        'Test String' => (strlen('test') === 4),
        'Test Email' => validerEmail('test@example.com'),
        'Test DB' => testerConnexionDB()
    ];
    
    return $tests;
}
?>