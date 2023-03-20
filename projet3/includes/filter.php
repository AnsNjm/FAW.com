<?php
session_start();
$sql = "SELECT * FROM offres JOIN recruteurs ON offres.id_recruteur = recruteurs.id_rec";
$where = "";
$params = [];

if (isset($_POST['filterOffres'])) {
  if (isset($_POST['category'])) {
    $categories = $_POST['category'];
    $in = implode(',', array_fill(0, count($categories), '?'));
    $where .= " AND categorie IN ($in)";
    $params = array_merge($params, $categories);
  }
  if (isset($_POST['type'])) {
    $types = $_POST['type'];
    $in = implode(',', array_fill(0, count($types), '?'));
    $where .= " AND type IN ($in)";
    $params = array_merge($params, $types);
  }
  if (!empty($where)) {
    $sql .= " WHERE 1=1 $where";
  }
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
