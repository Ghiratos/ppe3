<nav>
	<ul>
		<li class="menu"><a href="index.php?uc=accueil">ACCUEIL</a></li>
		
		<?php
			if(isset($_SESSION['idAdmin']))
			{
		?>
		
		<li class="menu"><a href="index.php?uc=administrer&action=administrer">ADMINISTRATION</a></li>
		<li class="menu"><a href="index.php?uc=gererComptabilite&action=Comptabilite">COMPTABILITÉ</a></li>
		<li class="menu"><a href="index.php?uc=connexion&action=sedeconnecter">DÉCONNEXION</a></li>
		
		<?php
			}
			else
			{
		?>
		
		<li class="menu"><a>INSCRIPTION</a>
			<ul class="sous-menu">
				<li><a href="index.php?uc=inscriptionCompet&action=inscriptionCompet">Inscription à la compétition</a></li>
				<li><a href="index.php?uc=inscriptionCompet&action=inscriptionRestauration">Inscription à la restauration</a></li>
				<li><a href="index.php?uc=inscriptionCompet&action=inscriptionHebergement">Inscription pour l'hébergement</a></li>
			</ul>
		</li>
		<li class="menu"><a>COMPÉTITION</a>
			<ul class="sous-menu">
				<li><a href="index.php?uc=gererPersonnel&action=ajoutJuge">Ajouter un juge</a></li>
				<li><a href="index.php?uc=gererPersonnel&action=modifJuge">Modifier un juge</a></li>
				<li><a href="index.php?uc=gererPersonnel&action=modifNbGymnaste">Modifier le nombre de gymnaste</a></li>
			</ul>
		</li>
		<li class="menu"><a>HEBERGEUR</a>
			<ul class="sous-menu">
				<li><a href="index.php?uc=gererHebergeur&action=ajoutHebergeur">Ajouter un hébérgeur</a></li>
			</ul>
		<li class="menu"><a href="index.php?uc=connexion&action=seconnecter">CONNEXION</a></li>
		
		<?php
			}
		?>
	</ul>	
</nav>