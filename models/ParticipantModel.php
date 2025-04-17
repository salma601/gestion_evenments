<?php
require_once __DIR__ . '/../config/Database.php';
class ParticipantModel {
    private $conn;
    public function __construct() {
        $this->conn = (new Database())->conn;
    }
    public function getAllParticipants(): array {
        $stmt = $this->conn->query("SELECT * FROM participants ORDER BY nom");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
