<?php
$hostname = "mysql";
$dbname = "demo";
$user = "root";
$pass = "password";


try {
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}


$sth = $db->prepare("SELECT * FROM libro");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$results = $sth->fetchAll(\PDO::FETCH_ASSOC);

foreach ($results as $result) {
var_dump($result);
}
$db = null;

