<?php
include __DIR__ . '/../layout/header.php';
require_once __DIR__ . '/../../models/EventModel.php';

$id    = intval($_GET['id'] ?? 0);
$model = new EventModel();
$event = $model->getEventById($id);
if (!$event) {
    echo "<p>Événement introuvable.</p>";
    include __DIR__ . '/../layout/footer.php';
    exit;
}
?>
<h2>Modifier l'événement</h2>
<form action="../../controllers/EventController.php" method="post">
  <input type="hidden" name="id" value="<?= $event['id'] ?>">
  <label for="titre">Titre :</label>
  <input type="text" id="titre" name="titre" value="<?= htmlspecialchars($event['titre']) ?>" required>

  <label for="date_evenement">Date :</label>
  <input type="date" id="date_evenement" name="date_evenement" value="<?= $event['date_evenement'] ?>" required>

  <label for="description">Description :</label>
  <textarea id="description" name="description" rows="4"><?= htmlspecialchars($event['description']) ?></textarea>

  <input type="submit" name="edit_event" value="Mettre à jour">
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>
