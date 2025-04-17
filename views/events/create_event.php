<?php
include __DIR__ . '/../layout/header.php';
$message = $_SESSION['message'] ?? null;
$errors  = $_SESSION['errors']  ?? [];
unset($_SESSION['message'], $_SESSION['errors']);
?>
<h2>Créer un événement</h2>
<?php foreach($errors as $e): ?>
  <p class="error"><?= $e ?></p>
<?php endforeach; ?>
<?php if($message): ?>
  <p class="success"><?= $message ?></p>
<?php endif; ?>
<form action="../../controllers/EventController.php" method="post">
  <label for="titre">Titre :</label>
  <input type="text" id="titre" name="titre" required>

  <label for="date_evenement">Date :</label>
  <input type="date" id="date_evenement" name="date_evenement" required>

  <label for="description">Description :</label>
  <textarea id="description" name="description" rows="4"></textarea>

  <input type="submit" value="Créer">
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>
