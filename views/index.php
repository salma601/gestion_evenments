<?php
require_once __DIR__ . '/../config/helpers.php';
log_time('index:start');
error_reporting(E_ALL);
ini_set('display_errors',1);
include __DIR__ . '/layout/header.php';
?>
<main role="main">
  <div class="card">
    <h2>Bienvenue sur le système de gestion des événements</h2>
    <ul>
      <li><a href="events/create_event.php">Créer un événement</a></li>
      <li><a href="events/list_events.php">Voir les événements</a></li>
      <li><a href="participants/register_participant.php">Inscrire un participant</a></li>
      <li><a href="inscriptions/list_inscriptions.php">Voir les inscriptions</a></li>
    </ul>
  </div>
</main>
<?php include __DIR__ . '/layout/footer.php'; ?>
