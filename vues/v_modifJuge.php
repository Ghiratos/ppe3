<!doctype html>
<html>

    <head>
        <title>Modification des juges</title>
    </head>

    <body>
        <h2 id="titre"><center>Selection de la Compétition pour modifier un juge</center></h2>

        <div class="blocCentral">
            <form  action="index.php?uc=gererPersonnel&action=choixJuge" method="POST" id="formulaireInscription">
                <table>
                    <tbody>
                        <tr>
                            <center>
                                <td id="couleurPolice">Sélection de la compétition :</td>
          
                                <td>
                                    <select name="numCompet">
                                        <?php
                                            foreach($lesCompetitions as $uneCompetition)
                                            {
                                                $numC=$uneCompetition['numCompetition'];
                                                $libelleC=$uneCompetition['libelle'];
                                                echo "<option value='". $numC."'>".$libelleC."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </center>
                        </tr>
                    </tbody>
                </table>

                <center><input type="submit" value="Modifier" name="valider"></center>
        
            </form>   
        </div> 
    </body>
</html>
