<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions Organisation et de Gestion</title>
    <link rel="stylesheet" href="styles/intervention.css">
</head>
<body>
  <nav>
    <h1>SOG</h1>
    <div class="onglets">
      <a href="index.php">Accueil</a>
      <a href="gestion_intervention.php">Intervention</a>
      <a href="contact.php">Contact</a>
      <a href="">A propos</a>
    </div>
    <div class="profil">
      <a href="profil/profil.php">Votre Profil</a>
    </div>
  </nav>
  <header>
    <h1>Solution d'Organisation et de Gestion</h1>
    <h4>Votre entreprise d'informatique préférée</h4>
  </header>

  <section class="main" id="client">
    <h2>Gestion des Clients</h2>

    <?php
    require_once("controleur/controleur.class.php");
    $unControleur = new Controleur();
    ?>

    <?php
    $leClient = null;
    if (isset($_GET['action']) && isset($_GET['numClient'])) {
        $action = $_GET['action'];
        $numClient = $_GET['numClient'];

        switch ($action) {
            case "sup":
                $unControleur->deleteClient($numClient);
                break;

            case "edit":
                $leClient = $unControleur->selectWhereClient($numClient);
                break;
        }
    }

    require_once("vue/vue_insert_client.php");

    if (isset($_POST['Valider'])) {
        $unControleur->insertClient($_POST);
    }
    if (isset($_POST['Modifier'])) {
        $unControleur->updateClient($_POST);
        header("location: gestion_client.php?");
    }

    if (isset($_POST['Filtrer'])) {
        $filtre = $_POST['filtre'];
        $lesClients = $unControleur->searchAllClients($filtre);
    } else {
        $lesClients = $unControleur->selectAllClients();
    }
    require_once("vue/vue_select_client.php");
    ?>

  </section>

  <footer>
    <h1>Contact</h1>

    <div class="contact">
      <div class="contact">
        <h3>Instagram</h3>
        <p></p>
      </div>
      <div class="contact">
        <h3>Twitter</h3>
        <p></p>
      </div>
      <div class="contact">
        <h3>Meta</h3>
        <p></p>
      </div>
    </div>

    <p id="contact">Contact : 06 31 49 30 80 | SOG.pro@gmail.com</p>
  </footer>

</body>
</html>
