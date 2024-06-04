
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tableau de bord</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <h1>Tableau de bord </h1>
            <?php

                $leInterventionT = null; //INTERVENTION a modifier
                if (isset($_GET['action']) && isset($_GET['numI']))
                {
                    $action = $_GET['action'];
                    $numI = $_GET['numI'];

                    switch($action)
                    {
                        /*case "sup" : $unControleur->deleteInterventionT($numI); 
                        break;*/
                        
                        case "edit" :$leInterventionT=$unControleur->selectWhereInterventionTechnicien ($numI);         
                        break;
                    }
                }
                ?>
            <?php  require_once ("../vue/vue_select_tableau_de_bord.php"); ?>
        </center>
    </body>
</html>

