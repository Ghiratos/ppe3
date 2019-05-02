<h2 id="titre"><center>COMPTABILITÉ :</center></h2><BR/>
  <div class="blocCentral2">
   <table id="formulaireInscription">
        <tr>
        <td id="couleurPolice">NUM ASSOCIATION </td><td id="couleurPolice">NOM ASSOCIATION </td>
        <td id="couleurPolice">VALIDATION</td>
        </tr> 
        <?php
        foreach( $lesAssociations  as $uneAssociation) {
            $NumAssociation = $uneAssociation['numAssoc'];
            $nomAssoc = $uneAssociation['nomAssoc'];
            $validation=$uneAssociation['validationPaiement'];
            if($validation==1)
              $confirmation="OUI";
            else
               $confirmation="NON";

    ?>
    <tr>
     <td width=150><?php echo $NumAssociation ?></td>
      <td width=150><?php echo $nomAssoc ?></td>
       <td width=150><?php echo $confirmation ?></td>

       </tr>
      <?php
       }
       ?>
       </table>

</div>
            
</body>
</html>
