<?php
require_once __DIR__ . '/../config/Database.php';
$db = new Database();
$stmt = $db->conn->query(
    "SELECT i.id, e.titre, p.nom, p.email, i.date_inscription
     FROM inscriptions i
     JOIN events e ON i.event_id = e.id
     JOIN participants p ON i.participant_id = p.id
     ORDER BY i.date_inscription DESC"
);
$inscriptions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
