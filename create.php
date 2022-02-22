<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storage";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO magazijn (id, product, categorie, totaal)
  VALUES (:id ,:mproduct, :categorie, :totaal)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':product', $product);
  $stmt->bindParam(':categorie', $categorie);
  $stmt->bindParam(':totaal', $totaal);

  // insert a row
  $id = NULL;   
  $product = $_POST["product"];
  $categorie = $_POST["categorie"];
  $totaal = $_POST["totaal"];
  $trekhaak = $_POST["trekhaak"];

  
  $stmt->execute();

  echo "New records created successfully";
  header("Refresh:3; ./overzichtartikelen.php");
} catch(PDOException $e) {
  echo $e->getMessage();
  header("Location: ./index.php");
}
$conn = null;
?>
