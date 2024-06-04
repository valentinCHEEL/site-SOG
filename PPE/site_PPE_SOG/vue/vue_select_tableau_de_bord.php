<h3> Liste des interventions</h3>
<form method="post" style="color: white;">
    Filter par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;">
    <tr>
        <td> numI </td>
        <td> dateAffectation</td>
        <td> dateArrive</td>
        <td> dateFin</td>
        <td> etat</td>
        <td> Les matéeriels </td>
        <td> matricule</td>
        <td> numClient</td>
    </tr>

    <?php
    // Affichage des interventions
    if (isset($lesInterventionsT)) {
        foreach ($lesInterventionsT as $uneInterventionT) {
            echo "<tr>";
            echo "<td>" . $uneInterventionT['numI'] . "</td>";
            echo "<td>" . $uneInterventionT['dateAffectation'] . "</td>";
            echo "<td>" . $uneInterventionT['dateArrive'] . "</td>";
            echo "<td>" . $uneInterventionT['dateFin'] . "</td>";
            echo "<td>" . $uneInterventionT['etat'] . "</td>";
            echo "<td>" . $uneInterventionT['libelleMateriel'] . "</td>";
            echo "<td>" . $uneInterventionT['matricule'] . "</td>";
            echo "<td>" . $uneInterventionT['numClient'] . "</td>";
/*
            echo "<td> <a href='gestion_intervention.php?&action=sup&numI=" . $uneInterventionT['numI'] . "'>";
            echo "<img src='img/suppr.jpeg' height='30' width='30'></a>";
            */
            echo "<a href='gestion_intervention.php?&action=edit&numI=" . $uneInterventionT['numI'] . "'>";
            echo "<img src='img/edit.jpeg' height='30' width='30'></a>";
            echo "</td>";
            echo "</tr>";

        }
    }
    ?>
</table>
