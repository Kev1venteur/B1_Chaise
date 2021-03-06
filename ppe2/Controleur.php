<?php
//include du fichier GESTION pour les objets (Modeles)
include 'Modeles/gestionMairie.php';

//classe CONTROLEUR qui redirige vers les bonnes vues les bonnes informations
class Controleur
	{
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------ATTRIBUTS PRIVES-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private $maMairie;


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CONSTRUCTEUR------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function __construct()
		{
		$this->maMairie = new gestionMairie();
		}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------METHODE D'AFFICHAGE DE L'ENTETE-----------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function afficheEntete()
		{
		//appel de la vue de l'entête
		require 'Vues/entete.php';
		require 'Vues/modalConnex.php';
		require 'Vues/modalRetour.php';
		require 'Vues/modalMpPerdu.php';
		require 'Vues/modalRenouvellementMp.php';
		}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------METHODE D'AFFICHAGE DU PIED DE PAGE------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function affichePiedPage()
		{
		//appel de la vue du pied de page
		require 'Vues/piedPage.php';
		}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//--------------------------METHODE D'AFFICHAGE DU MENU-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

	public function afficheMenu()
		{
		//appel de la vue du menu
		require 'Vues/menu.php';
		}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//--------------------------METHODE D'AFFICHAGE DES VUES----------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function affichePage($action,$vue)
		{
		//SELON la vue demandée
		switch ($vue)
			{
			case "club":
				$this->vueClub($action);
				break;
			case "ressource":
				$this->vueRessource($action);
				break;
			case "accueil":
				session_destroy();
				break;
			}
		}

	// afficher le renouvellement du mots de passe

	public function affichePage1($action,$vue,$token)
		{
			$_SESSION['token']=$token;
			switch ($vue)
			{
			case "motdepasse":
					{
						$this->renouvellementMotDePasse($action);
						break;
					}
			}
		}
		private function renouvellementMotDePasse($action)
		{
			if($action=='renouvellement')
			{
				echo '<script>$("#myModalRenouvellementMp").modal();</script>';
			}
		}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//----------------------------CLUB--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function vueClub($action)
		{
		//SELON l'action demandée
		switch ($action)
			{

			//CAS ajout d'un Club---------------------------------------------------------------------------------------------------------
			case "ajouter" :
				require 'Vues/ajouterClub.php';
				break;

			//CAS visualisation des Clubs-------------------------------------------------------------------------------------------------
			case "visualiser" :
				if ($this->maMairie->donneNbClubs()==0)
					{
					$message = "Il n'existe pas de club";
					$lien = 'index.php?vue=club&action=ajouter';
					$_SESSION['message'] = $message;
					$_SESSION['lien'] = $lien;
					require 'Vues/erreur.php';
					}
				else
					{
					$_SESSION['lesClubs'] = $this->maMairie->listeLesClubs();
					require 'Vues/voirClub.php';
					}
				break;
				//CAS modifier d'un Club---------------------------------------------------------------------------------------------------------
				case "modifier" :
					$monClub=$this->maMairie->gettousLesClubs()->donneObjetClubDepuisNumero($_SESSION['idClub']);
					require 'Vues/modifierClub.php';
					break;

			//CAS enregistrement d'un club dans la base------------------------------------------------------------------------------
			case "enregistrer" :
				$nomClub = $_POST['nomClub'];
				$adresseClub = $_POST['adresseClub'];
				$emailClub = $_POST['emailClub'];
				$dateCreationClub = $_POST['dateCreation'];
				$resumeActiviteClub = $_POST['resumeActiviteClub'];

				if (empty($nomClub)||empty($adresseClub)||empty($emailClub)||empty($dateCreationClub)||empty($resumeActiviteClub))
					{
					$message = "Veuillez saisir les informations";
					$lien = 'index.php?vue=club&action=ajouter';
					$_SESSION['message'] = $message;
					$_SESSION['lien'] = $lien;
					require 'Vues/erreur.php';
					}
				else
					{
						echo "2";
					$this->maMairie->ajouteUnClub($nomClub,$adresseClub,$emailClub,$dateCreationClub,$resumeActiviteClub);
					require 'Vues/enregistrer.php';
					// $_SESSION['Controleur'] = serialize($this);
					}
				break;

			}
		}

	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//----------------------------Ressources-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function vueRessource($action)
		{
		//SELON l'action demandée
		switch ($action)
			{

			//CAS ajout d'une ressource---------------------------------------------------------------------------------------------------------
			case "ajouter" :
				if ($this->maMairie->donneNbRessources()==0)
					{
					$message = "Il n'existe pas de Ressource";
					$lien = 'index.php?vue=ressource&action=ajouter';
					$_SESSION['message'] = $message;
					$_SESSION['lien'] = $lien;
					require 'Vues/erreur.php';
					}
				else
					{
							require 'Vues/ajouterRessource.php';
					}
				break;

			//CAS visualisation des Ressources------------------------------------------------------------------------------------------------
			case "visualiser" :
				if ($this->maMairie->donneNbRessources()==0)
					{
					$message = "Il n'existe pas de ressource";
					$lien = 'index.php?vue=ressource&action=ajouter';
					$_SESSION['message'] = $message;
					$_SESSION['lien'] = $lien;
					require 'Vues/erreur.php';
					}
				else
					{
					$_SESSION['lesRessources'] = $this->maMairie->listeLesRessources();
					require 'Vues/voirRessource.php';
					}
				break;

			//CAS enregistrement d'une ressource dans la base------------------------------------------------------------------------------
			case "enregistrer" :
				$nom = $_POST['nomRessource'];
				if (empty($nom))
					{
					$message = "Veuillez saisir les informations";
					$lien = 'index.php?vue=ressource&action=ajouter';
					$_SESSION['message'] = $message;
					$_SESSION['lien'] = $lien;
					require 'Vues/erreur.php';
					}
				else
					{
					$this->maMairie->ajouteUneressource($nom);
					require 'Vues/enregistrer.php';
					//$_SESSION['Controleur'] = serialize($this);
					}
				break;
			}
		}

	}
?>
