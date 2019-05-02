<!DOCTYPE html>
<html>
  <body>
    <h2 id="titre"><center>Inscription herbergement</center></h2><br/>
    <div class="blocCentral">
      <form action="index.php?uc=inscriptionCompet&action=confirmInscriptionHebergement" method="post" id="formulaireInscription">
        <table>
          <tbody>
            <tr>
              <td id="couleurPolice">Sélection de l'association : </td>
              <td>
                <select name="TAssociation" >
                  <?php 
                    foreach ($associations as $association)
                    { 
                      echo "<option value'". $association['numAssoc'] . "'>".$association['nomAssoc']. "</option>";     
                    }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td id="couleurPolice">Sélection du Juge : </td>
              <td>
                <select name="TJuge" >
                  <?php 
                    foreach ($juges as $juge)
                    { 
                      echo "<option value='". $juge['numJuge'] . "'>".$juge['nomJuge']. "</option>";      
                    }
                  ?>
                </select>
              </td>
            </tr>
          <center><td id="couleurPolice">Choix prestation Juge: </td></center>

            <tr>
              <td id="couleurPolice">Repas du vendredi Soir : <input type="checkbox" name="RepasVJuge" value="1">conjoint<input type="checkbox" name="RepasVConj" value="1" ></td>
            </tr>
            <tr>
              <td id="couleurPolice">Herbergement par l'organisateur vendredi soir : <input type="checkbox" name="HerbVSJuge" value="1">conjoint<input type="checkbox" name="HerbVSConj"  value="1"></td>
            </tr>  
            <tr>
              <td id="couleurPolice">Repas du samedi soir: <input type="checkbox" name="RepasSSJuge" >conjoint<input type="checkbox" name="RepasSSConj" ></td>
            </tr> 
            <tr>
              <td id="couleurPolice">Repas officiel du samedi soir: <input type="checkbox" name="RepasOSSJuge" >conjoint<input type="checkbox" name="RepasOSSConj" ></td>
            </tr> 
            <tr>
              <td id="couleurPolice">Fete de nuit:<input type="checkbox" name="FeteNJuge" >conjoint<input type="checkbox" name="FeteNConj" > </td>
            </tr>
            <tr>
              <td id="couleurPolice">herbergement par l'organisateur samedi soir:<input type="checkbox" name="HerbOSSJuge" >conjoint<input type="checkbox" name="HerbOSSConj" ></td>
            </tr>
            <tr>
              <td id="couleurPolice">Pique nique dimanche midi <input type="checkbox" name="PiqueDMJuge" >conjoint<input type="checkbox" name="PiqueDMConj" ></td>
            </tr>
            <td id="couleurPolice"> Deplacement: </td>
            <tr>
              <td id="couleurPolice">Voyagez-vous avec votre association ? oui <input type="checkbox" name="OuiVoyAssoc" >  non  <input type="checkbox" name="NonVoyAssoc" ></td>
            </tr>
            <tr>
              <td id="couleurPolice">Si non quel, est votre moyen de locomotion : voiture particuliere <input type="checkbox" name="RepVoiture" > </td>
            </tr>
            <tr>
              <td id="couleurPolice">train <input type="checkbox" name="RepTrain" ></td>
            </tr>
            <tr>
              <td id="couleurPolice"> autre<input type="checkbox" name="RepAutre" ></td>
            </tr>
          </td>
        </tr>
      </tbody>
    </table>
    <br/>
    <center><input type="submit" value="Valider" id="Valider"></center>
    </form>
  </div>
  </body>
</html>
  