<?php
session_start();
//include du fichier CONTROLEUR
$path=$_SERVER['DOCUMENT_ROOT'].'/Chaise-master/ppe2';
include 'Controleur.php';
//SI le controleur n'existe pas d�j�, on l'instancie
if (!isset ($_SESSION['Controleur']))
	{
	$monControleur = new Controleur();
	//$_SESSION['Controleur'] = serialize($monControleur);
	}
else
	{
	//$monControleur = unserialize($_SESSION['Controleur']);
	}
//affichage de l'ent�te
$monControleur->afficheEntete();
//affichage du menu
$monControleur->afficheMenu();
if ((isset($_GET['vue'])) && (isset($_GET['action'])))
	$monControleur->affichePage($_GET['action'],$_GET['vue']);
//affichage du pied de page
$monControleur->affichePiedPage();
?>
<?php
if ((isset($_GET['vue']))&& (isset($_GET['action'])))
{
	echo "<script>$('#main-menu').removeClass('d-block').addClass('d-none');</script>";
	if(!isset($_GET['token']))
	{
	$monControleur->affichePage($_GET['action'],$_GET['vue']);
	}
	else {
		echo "<script>$('#main-menu').removeClass('d-none').addClass('d-block');</script>";
		$monControleur->affichePage1($_GET['action'],$_GET['vue'],$_GET['token']);
	}
}
else {
	echo "<script>$('#main-menu').removeClass('d-none').addClass('d-block');</script>";
}


?>
<script type="text/javascript">
	$(document).ready(function() {
	$('#tabClub').DataTable();
} );
</script>
