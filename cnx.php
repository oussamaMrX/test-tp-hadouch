<?php echo "Hello, World!"; ?>
<?php

$host = 'localhost';      
$db   = 'nom_de_la_base'; 
$user = 'root';           
$pass = '';                


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       
    PDO::ATTR_EMULATE_PREPARES   => false,                 
];

try {
    
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    
    error_log('Erreur de connexion : ' . $e->getMessage());
    exit('Impossible de se connecter à la base de données.');
}
?>
