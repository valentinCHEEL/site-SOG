<?php 
session_start();
require_once()
?>

<?php
   require_once("controleur/controleur.class.php");
    $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="../site_PPE_SOG/styles/intervention.css">
</head>
<body>
<a href="index.php" class="back-button">Retour</a>
</body>
</html>
<center>

<h2>categorie</h2>


<?php
    $leCategorie = null;
    if (isset($_GET['action']) && isset($_GET['numClient']))
    {
        $action = $_GET['action'];
        $numClient = $_GET['numClient'];

        switch($action)
        {
            case "sup" : $unControleur->deleteCategorie($numClient); 
            break;
            
            case "edit" :$leCategorie=$unControleur->selectWhereCategorie ($numClient);         
            break;
        }
    }

    require_once ("vue/vue_insert_Categorie.php");
    
    if (isset($_POST['Valider']))
    {
        $unControleur->insertCategorie ($_POST);
    }
    if (isset($_POST['Modifier']))
    {
        $unControleur->updateCategorie ($_POST);
        header("location: gestion_categorie.php?");
    }

    if (isset($_POST['Filtrer']))
    {
        $filtre = $_POST['filtre'];
        $lesCategories = $unControleur->searchAllCategories($filtre);
    
    }else{
        $lesCategories = $unControleur->selectAllCategories ();
    }
    require_once ("vue/vue_select_categorie.php");

?>
</center>