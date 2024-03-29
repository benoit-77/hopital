<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg text-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hôpital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/ajoutPatient.php">Ajout de patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/patients/1">Liste des patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/ajoutRendezvous.php">Prise de RDV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/listeRendezvous.php">Liste des RDV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/inscription.php">Ajout d'un employé</a>
        </li>
      </ul>
    </div>
  </div>
</nav>