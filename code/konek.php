<?php
try {
  $conn = new PDO('pgsql:host=dockerisedphpmaster_db_1;port=5432;dbname=docker user=postgres password=""');
  $conn->query("SET NAMES UTF8");
} catch (PDOException $e) {
  die('Connection failed: ' . $e->getMessage());
}

?>