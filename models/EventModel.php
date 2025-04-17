<?php
require_once __DIR__ . '/../config/Database.php';
class EventModel {
    private $conn;
    public function __construct() {
        $this->conn = (new Database())->conn;
    }
    public function getAllEvents(): array {
        $stmt = $this->conn->query("SELECT * FROM events ORDER BY date_evenement DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEventById(int $id): array|false {
        $stmt = $this->conn->prepare("SELECT * FROM events WHERE id=:id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
