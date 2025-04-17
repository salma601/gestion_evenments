<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../config/helpers.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom      = sanitize($_POST['nom'] ?? '');
    $email    = sanitize($_POST['email'] ?? '');
    $event_id = intval($_POST['event_id'] ?? 0);

    $errors = [];
    if (!$nom) {
        $errors[] = "Le nom est requis.";
    }
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide.";
    }
    if (!$event_id) {
        $errors[] = "Veuillez sélectionner un événement.";
    }

    if ($errors) {
        $_SESSION['errors'] = $errors;
    } else {
        $db = new Database();
        $db->conn->beginTransaction();
        $stmt1 = $db->conn->prepare(
            "INSERT INTO participants (nom, email) VALUES (:nom, :email)"
        );
        $stmt1->execute([':nom' => $nom, ':email' => $email]);
        $pid = $db->conn->lastInsertId();
        $stmt2 = $db->conn->prepare(
            "INSERT INTO inscriptions (event_id, participant_id) VALUES (:eid, :pid)"
        );
        $stmt2->execute([':eid' => $event_id, ':pid' => $pid]);
        $db->conn->commit();
        $_SESSION['message'] = "Inscription enregistrée.";
    }

    header("Location: ../views/participants/register_participant.php");
    exit;
}
?>
