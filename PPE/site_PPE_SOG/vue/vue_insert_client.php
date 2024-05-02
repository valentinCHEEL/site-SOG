<h3>Enregistrer un nouveau client</h3>
<style>
        body {
            background-image: url("images/arriereplan.jpg");
            background-size: cover; /* pour ajuster l'image à la taille de la fenêtre */
        }
</style>
<form method="post">
    <table>
        <tr>
            <td>Nom du client</td>
            <td><input type="text" name="nomClient" value="<?= ($leClient != null) ? $leClient['nomClient'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><input type="text" name="adresse" value="<?= ($leClient != null) ? $leClient['adresse'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type="text" name="ville" value="<?= ($leClient != null) ? $leClient['ville'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td><input type="text" name="codePostal" value="<?= ($leClient != null) ? $leClient['codePostal'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Numéro de Téléphone</td>
            <td><input type="text" name="numTel" value="<?= ($leClient != null) ? $leClient['numTel'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Adresse E-mail</td>
            <td><input type="text" name="adressemail" value="<?= ($leClient != null) ? $leClient['adressemail'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type="password" name="passwordc" value="<?= ($leClient != null) ? $leClient['passwordc'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Type de client</td>
            <td>
                <select name="typeClient">
                    <option value="Particulier" <?= ($leClient != null && $leClient['typeClient'] == 'Particulier') ? 'selected' : '' ?>>Particulier</option>
                    <option value="Entreprise" <?= ($leClient != null && $leClient['typeClient'] == 'Entreprise') ? 'selected' : '' ?>>Entreprise</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>SIRET de l'entreprise (pour les clients entreprise)</td>
            <td><input type="text" name="siret" value="<?= ($leClient != null) ? $leClient['siret'] : '' ?>"></td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" <?= ($leClient != null) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>></td>
        </tr>
    </table>
    <?= ($leClient != null) ? '<input type="hidden" name="numClient" value="' . $leClient['numClient'] . '">' : '' ?>
</form>

