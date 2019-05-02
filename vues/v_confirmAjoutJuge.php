<!doctype html>
<html>
  <head>
    <title>Le juge a bien été inscrit</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  </head>
	
	<?php 
    foreach ($leJuge as $juge) {

      foreach ($laCompetition as $competition) {

  ?>
   
   <body>
    <div><h2>Le juge <?php echo $juge['nomJuge']; ?> <?php echo $juge['prenomJuge']; ?> s'est inscrit a la compétition <?php echo $competition['libelle']; ?> </h2></div>
	
	 <?php   
      }
    }
  ?>
	</body>
</html>