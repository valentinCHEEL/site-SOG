<h3>Liste des clients</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;">
    <tr>
        <td>numClient</td>
        <td>nomClient</td>
        <td>adresse</td>
        <td>ville</td>
        <td>codePostal</td>
        <td>numTel</td>
        <td>adressemail</td>
        <td>typeClient</td>
        <td>siret</td>
        <td>Actions</td>
    </tr>

    <?php
    // Affichage des clients
    if (isset($lesClients)) {
        foreach ($lesClients as $unClient) {
            echo "<tr>";
            echo "<td>" . $unClient['numClient'] . "</td>";
            echo "<td>" . $unClient['nomClient'] . "</td>";
            echo "<td>" . $unClient['adresse'] . "</td>";
            echo "<td>" . $unClient['ville'] . "</td>";
            echo "<td>" . $unClient['codePostal'] . "</td>";
            echo "<td>" . $unClient['numTel'] . "</td>";
            echo "<td>" . $unClient['adressemail'] . "</td>";
            echo "<td>" . $unClient['typeClient'] . "</td>";
            echo "<td>" . $unClient['siret'] . "</td>";

            echo "<td> 
                    <a href='gestion_client.php?action=sup&numClient=" . $unClient['numClient'] . "'>
                        <img src='img/suppr.jpeg' height='30' width='30'>
                    </a>
                    <a href='gestion_client.php?action=edit&numClient=" . $unClient['numClient'] . "'>
                        <img src='img/edit.jpeg' height='30' width='30'>
                    </a>
                  </td>";
            echo "</tr>";
        }
    }
    ?>
</table>
