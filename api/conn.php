<?php
$dsn = 'mysql:host=containers-us-west-1.railway.app;port=7614;dbname=railway';
$user = 'root';
$pass = 'avGsYc2qEHoTUD7R8eoa';
$opts = [
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // this for set arabic letters
];
try {
  $db = new PDO($dsn, $user, $pass, $opts);
  // $q = "INSERT INTO items (name) VALUES ('منتج 5')";
  // $db->exec($q);
  // $q = "SELECT * FROM orders JOIN clients ON clients.id = orders.client_ID WHERE clients.id = 1";
  // $stmt = $db->prepare($q);
  // $stmt->execute();
  // $result = $stmt->fetchAll();
  // echo "<pre>";
  // print_r($result);
  // echo "</pre>";
  $stmt = $db->prepare("SELECT * FROM users WHERE userId= :id");
  $stmt->execute(['id' => 1]);
  $row = $stmt->fetchAll();
  echo '<pre>';
  print_r($row);
  echo '</pre>';
} catch (PDOException $e) {
  echo $e->getMessage();
}
