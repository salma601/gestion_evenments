<?php
require_once __DIR__ . '/../config/Database.php';
class InscriptionModel {
    private $conn;
    public function __construct() {
        $this->conn = (new Database())->conn;
    }
    public function getAllInscriptions(): array {
        $sql = "SELECT i.id, e.titre, p.nom, p.email, i.date_inscription
                FROM inscriptions i
                JOIN events e ON i.event_id=e.id
                JOIN participants p ON i.participant_id=p.id
                ORDER BY i.date_inscription DESC";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
