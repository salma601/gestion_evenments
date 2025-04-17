<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../config/helpers.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    log_time('EventController:start');

    $titre          = sanitize($_POST['titre'] ?? '');
    $date_evenement = sanitize($_POST['date_evenement'] ?? '');
    $description    = sanitize($_POST['description'] ?? '');

    // Validation
    $errors = [];
    if (!$titre) {
        $errors[] = "Le titre est requis.";
    }
    if (!$date_evenement || !strtotime($date_evenement)) {
        $errors[] = "Date invalide.";
    }

    if ($errors) {
        $_SESSION['errors'] = $errors;
    } else {
        $db = new Database();
        $sql = "INSERT INTO events (titre, date_evenement, description)
                VALUES (:titre, :date, :desc)";
        $stmt = $db->conn->prepare($sql);
        $stmt->execute([
            ':titre' => $titre,
            ':date'  => $date_evenement,
            ':desc'  => $description,
        ]);
        $_SESSION['message'] = "Événement créé avec succès.";
    }

    header("Location: ../views/events/create_event.php");
    exit;
}
?>
