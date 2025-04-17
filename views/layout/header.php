<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Gérez vos événements et inscriptions facilement.">
  <title>Gestion des Événements</title>

  <!-- Chemin relatif vers votre CSS -->
  <link rel="stylesheet" href="/gestion_evenements/public/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- (Optionnel en local) Canonical vers localhost -->
  <!-- <link rel="canonical" href="http://localhost/gestion_evenements/views/index.php"> -->

  <!-- Google Analytics (désactivable en local) -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer=window.dataLayer||[];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config','G-XXXXXXXXXX');
  </script>
  -->
</head>
<body>
  <header role="banner">
    <h1>Gestion des Événements</h1>
    <nav aria-label="Menu principal">
      <ul role="menubar">
        <li role="none"><a role="menuitem" href="/gestion_evenements/views/index.php">Accueil</a></li>
        <li role="none"><a role="menuitem" href="/gestion_evenements/views/events/create_event.php">Créer un événement</a></li>
        <li role="none"><a role="menuitem" href="/gestion_evenements/views/events/list_events.php">Liste des événements</a></li>
        <li role="none"><a role="menuitem" href="/gestion_evenements/views/participants/register_participant.php">Inscription</a></li>
        <li role="none"><a role="menuitem" href="/gestion_evenements/views/inscriptions/list_inscriptions.php">Liste des inscriptions</a></li>
      </ul>
    </nav>
  </header>
  <main role="main">
  <?php ob_start(); /* Début tampon pour minification du HTML */ ?>
