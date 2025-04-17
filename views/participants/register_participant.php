<?php
include __DIR__ . '/../layout/header.php';
require_once __DIR__ . '/../../models/EventModel.php';
$events = (new EventModel())->getAllEvents();

$message = $_SESSION['message'] ?? null;
$errors  = $_SESSION['errors']  ?? [];
unset($_SESSION['message'], $_SESSION['errors']);
?>
<h2>Inscrire un participant</h2>
<?php foreach($errors as $e): ?><p class="error"><?=$e?></p><?php endforeach; ?>
<?php if($message): ?><p class="success"><?=$message?></p><?php endif; ?>

<form action="../../controllers/ParticipantController.php" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required>

  <label for="event_id">Événement :</label>
  <select id="event_id" name="event_id" required>
    <option value="">-- Sélectionnez --</option>
    <?php foreach($events as $e): ?>
      <option value="<?= $e['id'] ?>"><?= htmlspecialchars($e['titre']) ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Inscrire">
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>
