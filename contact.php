<!DOCTYPE html>
<?php include "debut_pages.php"; ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio de Terence Renard</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="portfolio.css">
    </head>
<body>
	<div class="banniere">
		<nav class="menu">
			<div class="moi">
				<a href="portfolio.html" style="color:white;">Terence RENARD</a>
		    </div>
			<div class="menu1">
				<ul>
					<li><a href="qui-suis.html">Qui suis-je ?</a></li>
					<li><a href="parcours.html">Parcours</a></li>
					<li><a href="projet.html">Projets</a></li>
					<li><a href="veille.html">Veille</a></li>
					<li><a href="projetpro.html">Projet Professionnel</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="menu2">
				<ul>
					<li><a href="qui-suis.html">Qui suis-je ?</a></li>
					<li><a href="parcours.html">Parcours</a></li>
					<li><a href="projet.html">Projets</a></li>
					<li><a href="veille.html">Veille</a></li>
					<li><a href="projetpro.html">Projet Professionnel</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
	
	<div class="contourgris">
		<div class="contourblanc">
			<h1>Contact</h1>
				<div class="classique">
						<h2 style="color:black;">Si vous souhaitez rentrer en contact avec moi, voici le formulaire de contact :</h2>
				</div>
					<div class="classique">
					<?php
					$errors = array('message' => '', 'email' => '', 'nom' => '', 'prenom' =>'');
					$correct['envoie'] = "";
					// Récupérer les données dans des variables
					if (isset($_POST['message'])) {
						$monmail = "terence.renard@gmail.com";
						$recupnom = $_POST['nom'];
						$recupprenom = $_POST['prenom'];
						$recupemail = $_POST['email'];
						$recuptelephone = $_POST['telephone'];
						$recupsujet = 'Portfolio : ' . $_POST['sujet'];
						$recupmessage = $_POST['message'];
						
						// Message trop long
						if (strlen($recupmessage) > 3000)
							$errors['message'] = "<span style='color:red;'>Le message est trop long, il doit faire moins de 3000 caractères !</span>";
						
						// Adresse email erronée
						if (!preg_match('~[a-z0-9_-]+@[a-z0-9_-]+\.[a-z]+~i', $recupemail))
							$errors['email'] = "<span style='color:red;'>Le mail n'est pas bon.</span>";
						
						// Nom bizarre
						if (preg_match('/[0-9]/', $recupnom))
						  $errors['nom'] = "<span style='color:red;'>Ton nom contient des caractères interdits.</span>";

						// Prénom bizarre
						if (preg_match('/[0-9]/', $recupprenom))
						  $errors['prenom'] = "<span style='color:red;'>Ton prénom contient des caractères interdits.</span>";
						
						if (empty($errors['message']) && empty($errors['email']) && empty($errors['nom']) && empty($errors['prenom'])) {
						// Envoi du mail
						$body = "
Nom et prénom de la personne qui me contacte : $recupnom $recupprenom
Mail : $recupemail
Numéro de téléphone : $recuptelephone
Message : $recupmessage";
						myMail($monmail, $recupsujet, $body);
						$correct['envoie'] = "<h3 style='text-align:center;'>Votre message a bien été envoyé, je vais essayer d'y répondre au plus vite (promis je fais vite).</h3>";
						// var_dump($monmail, $recupnom, $recupprenom, $recupemail, $recuptelephone, $recupsujet, $recupmessage);
					}
				}
				
					?>
					<span class=error><?php echo $correct['envoie']; ?>
					<form method=post>
					<table id="table_contact">
						<tr><td><span class=error><?php echo $errors['nom']; ?></span>
						<tr><td>
								<input type="text" maxlength="32" class="input_form" name="nom" placeholder="Votre nom*" required />
							
						</tr>
						<tr><td><span class=error><?php echo $errors['prenom']; ?></span>
						<tr><td>
								<input type="text" maxlength="24" class="input_form" name="prenom" placeholder="Votre prénom*" required />
							
						</tr>
						<tr><td><span class=error><?php echo $errors['email']; ?></span>
						<tr><td>
								<input type="email" class="input_form" name="email" placeholder="Votre email*" required />
							
						</tr>
						<tr><td>
								<input type="telephone" class="input_form" name="telephone" placeholder="Votre numéro de téléphone"/>
						</tr>
						<tr><td>
								<input type="text" class="input_form" name="sujet" placeholder="Sujet du mail*" required />
						</tr>
						<tr><td><span class=error><?php echo $errors['message']; ?></span>
						<tr><td>
								<textarea name="message" required placeholder="Votre message (3000 caractères maximum)*"></textarea>
							
						</tr>
						<tr><td>
								<input type="submit" class="input_form" value="Envoyer le message" name="envoyer" disable="disabled" />
						</tr>
						<tr><td>* = Champ obligatoire
						</tr>
					</table>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fin">
	<span class="alignetoistp"><b>Copyright 2023 © Terence Renard</b></span>
	</div>
</body>