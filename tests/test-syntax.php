<?php
// Script de test pour Jenkins Pipeline

echo "=== TESTS PHP SYNTAX ===\n";

// Test 1: Vérifier les fichiers PHP
$files = [
    '../src/index.php',
    '../src/config.php', 
    '../src/functions.php'
];

$errors = 0;

foreach ($files as $file) {
    if (file_exists($file)) {
        $output = [];
        $return_code = 0;
        exec("php -l $file 2>&1", $output, $return_code);
        
        if ($return_code === 0) {
            echo "✅ $file - Syntaxe OK\n";
        } else {
            echo "❌ $file - Erreur de syntaxe\n";
            echo implode("\n", $output) . "\n";
            $errors++;
        }
    } else {
        echo "⚠️  $file - Fichier non trouvé\n";
        $errors++;
    }
}

// Test 2: Tester les fonctions
require_once '../src/functions.php';

echo "\n=== TESTS FONCTIONS ===\n";

$tests = executerTests();
foreach ($tests as $nom => $resultat) {
    if ($resultat) {
        echo "✅ $nom - OK\n";
    } else {
        echo "❌ $nom - ÉCHEC\n";
        $errors++;
    }
}

echo "\n=== RÉSULTATS ===\n";
if ($errors === 0) {
    echo "🎉 Tous les tests sont OK!\n";
    exit(0);
} else {
    echo "💥 $errors erreur(s) détectée(s)!\n";
    exit(1);
}
?>