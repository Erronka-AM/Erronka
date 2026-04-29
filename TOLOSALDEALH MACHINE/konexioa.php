<?php
// konexioa.php
$host = '192.168.X.X'; // OTP2 VMaren IPa
$db   = 'tolosaldealh_db';
$user = 'admin_web';    // MySQLen baimenak dituen erabiltzailea
$pass = 'tu_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     die("Konexio errorea: " . $e->getMessage());
}
?>