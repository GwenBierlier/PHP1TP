<!DOCTYPE html>
<html lang="fr">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0" />
		<title>PHP1TP : Papa, je peux avoir ta voiture ? ∙ PHP</title>
	
		<link rel="stylesheet" href="css/style.css" type="text/css">

	</head>
	
	<body>
		
		<div class="container" id="debut">

			<h1>Papa, je peux avoir ta voiture&nbsp;?</h1>
			
			<p>Tu dois emprunter la voiture de ton père. Essaie de le convaincre en répondant à ses questions pour gagner ses clefs.</p>
			
			<?php

				// Sortir les informations du formulaire, méthode GET
				$q1 = $_GET['q1'];
				$q2 = $_GET['q2'];
				$q3 = $_GET['q3'];
				$q4 = $_GET['q4'];
				$q5 = $_GET['q5'];
				$q6 = $_GET['q6'];
				
				function donnerLaReponse($class, $msg) {

					echo "<hr><p class='".$class."'>".$msg."</p><img src='voiture.jpg' class='".$class."' draggable='false' alt='Voiture'><hr>" ;

				}

				// À lancer dès que le formulaire est envoyé
				if(isset($_GET) && count($_GET)>0){

					if ( ($q1 == "false") && ($q2 == "false") && ($q3 == "true")  && ($q4 == "false") && ( ($q5 == "true")  || ($q6 == "true") ) ) {

						// Bonnes réponses, au moins un service accordé
						echo donnerLaReponse("bingo", "Bingo, voilà mes clefs !" ) ;

					} else if (($q1 == "false") && ($q2 == "false") && ($q3 == "true")  && ($q4 == "false") && ($q5 =="false") && ($q6 == "false") ) {

						// Bonnes réponses, mais aucun service n'est accordé
						echo donnerLaReponse("erreur", "Tu pourrais au moins me rendre un service en échange. Essaie encore." ) ;

					} else {

						// Mauvaises réponses
						echo donnerLaReponse("erreur", "Touche pas à ma caisse ! Essaie encore." ) ;

					}

				}

			?>

			<form method="get">
				
				<fieldset>
	
					<legend>Sais-tu plutôt prendre celle de ta mère ?</legend>
	
					<ul class="radio">

						<li>
							<input type="radio" id="q1r1" name="q1" value="true" checked <?php if( $_GET['q1']=='true'){ echo 'checked="checked"';} ?> required>
							<label for="q1r1" class="oui">Oui</label>
						</li>

						<li>
							<input type="radio" id="q1r2" name="q1" value="false" <?php if( $_GET['q1']=='false'){ echo 'checked="checked"';} ?> required>
							<label for="q1r2" class="non">Non</label>
						</li>
						
					</ul>
	
				</fieldset>
	
				<fieldset>
	
					<legend>Comptes-tu boire ?</legend>
	
					<ul class="radio">

						<li>
							<input type="radio" id="q2r1" name="q2" value="true" checked <?php if( $_GET['q2']=='true'){ echo 'checked="checked"';} ?> required>
							<label for="q2r1" class="oui">Oui</label>
						</li>

						<li>
							<input type="radio" id="q2r2" name="q2" value="false" <?php if( $_GET['q2']=='false'){ echo 'checked="checked"';} ?> required>
							<label for="q2r2" class="non">Non</label>
						</li>

					</ul>
	
				</fieldset>
				
				<fieldset>
	
					<legend>Promets-tu de ne pas la griffer ?</legend>
	
					<ul class="radio">

						<li>
	
							<input type="radio" id="q3r1" name="q3" value="true" checked <?php if( $_GET['q3']=='true'){ echo 'checked="checked"';} ?> required>
							<label for="q3r1" class="oui">Oui</label>
						</li>
	
						<li>
							<input type="radio" id="q3r2" name="q3" value="false" <?php if( $_GET['q3']=='false'){ echo 'checked="checked"';} ?> required>
							<label for="q3r2" class="non">Non</label>
						</li>

					</ul>
	
				</fieldset>
				
				<fieldset>
	
					<legend>La route est-elle dangereuse ?</legend>
	
					<ul class="radio">
	
						<li>
							<input type="radio" id="q4r1" name="q4" value="true" checked <?php if( $_GET['q4']=='true'){ echo 'checked="checked"';} ?> required>
							<label for="q4r1" class="oui">Oui</label>
						</li>
						
						<li>
							<input type="radio" id="q4r2" name="q4" value="false" <?php if( $_GET['q4']=='false'){ echo 'checked="checked"';} ?> required>
							<label for="q4r2" class="non">Non</label>
						</li>
						
					</ul>
	
				</fieldset>
				
				<fieldset>
	
					<legend>Fais-tu le plein à ton compte ?</legend>
	
					<ul class="radio">

						<li>
							<input type="radio" id="q5r1" name="q5" value="true" checked <?php if( $_GET['q5']=='true'){ echo 'checked="checked"';} ?> required>
							<label for="q5r1" class="oui">Oui</label>
						</li>
	
						<li>
							<input type="radio" id="q5r2" name="q5" value="false" <?php if( $_GET['q5']=='false'){ echo 'checked="checked"';} ?>required>
							<label for="q5r2" class="non">Non</label>
						</li>
						
					</ul>
	
				</fieldset>
				
				<fieldset>
	
					<legend>Passes-tu au car wash avant de me la rendre ?</legend>

					<ul class="radio">

						<li>
							<input type="radio" id="q6r1" name="q6" value="true" checked <?php if( $_GET['q6']=='true'){ echo 'checked="checked"';} ?> required>
							<label for="q6r1" class="oui">Oui</label>
						</li>
	
						<li>
							<input type="radio" id="q6r2" name="q6" value="false" <?php if( $_GET['q6']=='false'){ echo 'checked="checked"';} ?> required>
							<label for="q6r2" class="non">Non</label>
						</li>
						
					</ul>
	
				</fieldset>
	
				<input type="submit" value="Demander" class="button">
			
			</form>

		</div>

		<footer>

			<p>Réalisé par <a href="http://gwenbierlier.com">Gwen Bierlier</a> ∙ <a href="https://github.com/GwenBierlier/PHP1TP/blob/master/index.php">Source sur Github</a></p>

		</footer>

	</body>

</html>