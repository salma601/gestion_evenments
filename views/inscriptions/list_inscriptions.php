<?php
include __DIR__ . '/../layout/header.php';
require_once __DIR__ . '/../../controllers/InscriptionController.php';
?>
<h2>Liste des inscriptions</h2>
<table>
  <thead>
    <tr>
      <th>#</th><th>Événement</th><th>Participant</th><th>Email</th><th>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($inscriptions as $i): ?>
    <tr>
      <td><?= $i['id'] ?></td>
      <td><?= htmlspecialchars($i['titre']) ?></td>
      <td><?= htmlspecialchars($i['nom']) ?></td>
      <td><?= htmlspecialchars($i['email']) ?></td>
      <td><?= $i['date_inscription'] ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php include __DIR__ . '/../layout/footer.php'; ?>
