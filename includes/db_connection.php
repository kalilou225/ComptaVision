<?php
// Définition des paramètres de connexion à la base de données
$host = "localhost"; // Adresse du serveur de la base de données
$db_name = "etat"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur pour la base de données
$password = ""; // Mot de passe pour la base de données

try {
    // Création d'une instance de la classe PDO pour la connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);

    // Configuration du mode d'erreur PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, affichage d'un message d'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>