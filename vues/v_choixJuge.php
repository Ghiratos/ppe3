<!doctype html>
<html>

    <head>
    	<title>Modification des juges</title>
    </head>

    <body>

        <h2 id="titre"><center>Sélection du juge à supprimer de la compétition et du juge à ajouter à celle-ci</center></h2>

        <div class="blocCentral">
            <form action="index.php?uc=gererPersonnel&action=choixJugeConfirmation" method="POST" id=formulaireInscription>
                <table>
                    <tbody>
                        <td><input type="text" name="numCompet" value="<?php echo $_POST['numCompet'] ?>" hidden ></td>
                        <tr>
                                
                                <td id="couleurPolice">Sélection du juge à supprimer :</td>
                               
                               
                                <td>
                                    <select name="numJuge">
                                        <?php
                                            foreach($lesJuges as $unJuge)
                                            {
                                                $nom = $unJuge['nomJuge'];
                                                $prenom = $unJuge['prenomJuge'];
                                                $numJ = $unJuge['numJuge'];
                                                echo "<option value='".$numJ."'>".$nom." ".$prenom."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            
                            
                        </tr>
                        <tr>
                            
                                <td id="couleurPolice">Sélection du juge à ajouter :</td>
                                <td>
                                    <select name="numJugeFinal">
                                        <?php
                                            foreach($lesJugesF as $unJugeF)
                                            {
                                                $nom = $unJugeF['nomJuge'];
                                                $prenom = $unJugeF['prenomJuge'];
                                                $numJF = $unJugeF['numJuge'];
                                    
                                                echo "<option value='".$numJF."'>".$nom." ".$prenom."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            
                        </tr>
                    </tbody>
                </table>

                <center> <input type="submit" value="Modifier" name="valider"></center>
              
            </form>  
        </div>  
    </body>
</html>
