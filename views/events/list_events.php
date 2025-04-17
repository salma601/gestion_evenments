<?php
include __DIR__ . '/../layout/header.php';
require_once __DIR__ . '/../../models/EventModel.php';
$events = (new EventModel())->getAllEvents();
?>
<h2>Liste des événements</h2>
<div class="events-grid">
<?php foreach($events as $e): ?>
  <div class="event-card" tabindex="0">
    <h3><?= htmlspecialchars($e['titre']) ?></h3>
    <p class="date"><?= $e['date_evenement'] ?></p>
    <p><?= nl2br(htmlspecialchars($e['description'])) ?></p>
  </div>
<?php endforeach; ?>
</div>
<?php include __DIR__ . '/../layout/footer.php'; ?>
