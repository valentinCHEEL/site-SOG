<h3 style="color: white;"> Les categories</h3>
<form method="post">
    <table style="color: white;">
    <tr>
        <td> numClient</td>
        <td>
            <select name="numClient">
                <?php
                foreach($lesClients as $unClient){
                    echo "<option value='" .$unClient['numClient']."'";
                    echo ">";
                    echo $unClient['numClient'];
                    echo "</option>"; 
                }
                ?>
            </select>
        </td>
    </tr>
        <tr>
            <td> libelleCategorie </td>
            <td> <input type="text" name="libelleCategorie"
                value="<?= ($leCategorie!=null)?$leCategorie['libelleCategorie']:''?>"></td>
        </tr>
       
        
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"></td>
            <td> <input type="submit" 
                <?= ($leCategorie!=null)? 'name="Modifier" 
                value="Modifier" ' : ' name="Valider"
                value="Valider" ' 
                ?>
            ></td>
        </tr>
</table>
<?=
($leCategorie!=null)?'<input type="hidden" name ="numI" value="'.$leCategorie['numI'].'">' : ''
?>
</form>