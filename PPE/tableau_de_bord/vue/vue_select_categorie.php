
<h3 style="color: white;"> Liste des interventions</h3>
<form method="post" style="color: white;">
    Filter par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;">
    <tr>
        <td> numClient</td>
        <td> libelleCategorie</td>
    </tr>

    <?php
    // Affichage des interventions
    if (isset($lesCategories)) {
        foreach ($lesCategories as $uneCategorie) {
            echo "<tr>";
            echo "<td>" . $uneCategorie['numClient'] . "</td>";
            echo "<td>" . $uneCategorie['categorie'] . "</td>";

            echo "<td> <a href='gestion_categorie.php?&action=sup&numI=" . $uneCategorie['numClient'] . "'>";
            echo "<img src='img/suppr.jpeg' height='30' width='30'></a>";
            echo "<a href='gestion_categorie.php?&action=edit&numI=" . $uneCategorie['numClient'] . "'>";
            echo "<img src='img/edit.jpeg' height='30' width='30'></a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
