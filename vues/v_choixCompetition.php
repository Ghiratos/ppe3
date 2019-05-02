<!doctype html>
<html>

    <head>
        <title>Sélection de la compétition</title>
    </head>

    <body>

        <h2 id="titre"><center>Sélection de la compétition pour modifier le nombre de gymnaste</center></h2>

        <div class="blocCentral">
            <form action="index.php?uc=gererPersonnel&action=choixNbGymnaste" method="POST" id=formulaireInscription>
                <table>
                    <tbody>
                        <tr>
                            <center>
                                <td id="couleurPolice">Sélection de la compétition :</td>

                                <td>
                                    <input type="text" name="numAssociation" value="<?php echo $_POST['numAssociation'] ?>" hidden>
                                    <select name="numCompetition">
                                        <?php
                                            foreach($lesCompetitions as $uneCompetition)
                                                {
                                                    $numCompet = $uneCompetition['numCompetition'];
                                                    $nomCompet = $uneCompetition['libelle'];
                
                                                    echo "<option value='".$numCompet."'>".$nomCompet."</option>";
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