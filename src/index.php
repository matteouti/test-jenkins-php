<?php
// src/index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Projet PHP - Jenkins Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .success {
            color: #28a745;
            background: #d4edda;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .info {
            color: #0c5460;
            background: #d1ecf1;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Mon Projet PHP - Test Jenkins</h1>
        
        <div class="success">
            <h2>✅ Application PHP déployée avec succès!</h2>
            <p>premier changement..</p>mm7
            <p>Cette page a été générée le: <strong><?php echo date('d/m/Y à H:i:s'); ?></strong></p>
        </div>

        <div class="info">
            <h3>📊 Informations du serveur:</h3>
            <ul>
                <li><strong>Version PHP:</strong> <?php echo phpversion(); ?></li>
                <li><strong>Serveur:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></li>
                <li><strong>OS:</strong> <?php echo php_uname('s'); ?></li>
                <li><strong>Build Number:</strong> <?php echo $_ENV['BUILD_NUMBER'] ?? 'Local'; ?></li>
            </ul>
        </div>

        <h3>🧮 Test de Calcul Simple:</h3>
        <?php
        $a = 10;
        $b = 5;
        $addition = $a + $b;
        $multiplication = $a * $b;
        
        echo "<p>$a + $b = <strong>$addition</strong></p>";
        echo "<p>$a × $b = <strong>$multiplication</strong></p>";
        ?>

        <h3>📝 Test de Fonction:</h3>
        <?php
        function calculerAge($anneeNaissance) {
            $anneeActuelle = date('Y');
            return $anneeActuelle - $anneeNaissance;
        }

        $age = calculerAge(1996);
        echo "<p>Si vous êtes né en 1996, vous avez <strong>$age ans</strong></p>";
        ?>

        <div class="success">
            <p><strong>🎉 Tous les tests PHP sont OK!</strong></p>
            <p>Pipeline Jenkins exécuté avec succès</p>
        </div>
    </div>
</body>
</html>