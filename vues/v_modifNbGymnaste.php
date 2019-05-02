<!doctype html>
<html>

    <head>
        <title>Modification du nombre de gymnastes</title>
    </head>

    <body>

        <h2 id="titre"><center>Sélection de l'association pour modifier le nombre de gymnaste</center></h2>

        <div class="blocCentral">
            <form action="index.php?uc=gererPersonnel&action=choixCompetition" method="POST" id=formulaireInscription>
                <table>
                    <tbody>
                        <tr>
                            <center> 
                                <td id="couleurPolice">Sélection de l'association :</td>
                
                                <td>
                                    <select name="numAssociation">
                                        <?php
                                            foreach($lesAssociations as $uneAssociation)
                                            {
                                                $numAssoc = $uneAssociation['numAssoc'];
                                                $nomAssoc = $uneAssociation['nomAssoc'];
                                                echo "<option value='".$numAssoc."'>".$nomAssoc."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </center>
                        </tr>
                    </tbody>
                </table>

                <center><input type="submit" value="Choisir" name="valider"></center>

            </form>
        </div>
    </body>
</html>