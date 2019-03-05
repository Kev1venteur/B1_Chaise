<header>
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img class="logo" src="img/aussonne.png" alt=""></a>
	<p class="big-title">Aussonne</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
			<li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clubs</a>
		    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
		      <a class="dropdown-item administrateur d-none" href = 'index.php?vue=club&action=ajouter'>Ajouter un Club</a>
		      <a class="dropdown-item" href = 'index.php?vue=club&action=visualiser'>Voir les Clubs</a>
		      <a class="dropdown-item secretaire d-none" href="#">Modifier un Club</a>
		    </div>
		  </li>
			<li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ressources</a>
		    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
		      <a class="dropdown-item administrateur d-none" href = 'index.php?vue=ressource&action=ajouter'>Ajouter une Ressource</a>
		      <a class="dropdown-item" href = 'index.php?vue=ressource&action=visualiser'>Voir les Ressources</a>
		      <a class="dropdown-item secretaire d-none" href="#">Modifier une ressource</a>
		    </div>
		  </li>
			<li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Equipes</a>
		    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
					<a class="dropdown-item administrateur d-none" href="#">Ajouter une équipe</a>
					<a class="dropdown-item" href="#">Voir les équipes</a>
		      <a class="dropdown-item secretaire d-none" href="#">Modifier une équipe</a>
		    </div>
		  </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Jour Semaine</a>
				<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
					<a class="dropdown-item administrateur d-none" href="#">Ajouter un Jour</a>
					<a class="dropdown-item" href="#">Voir les jours</a>
					<a class="dropdown-item secretaire d-none" href="#">Modifier un jours</a>
					<a class="dropdown-item" href="#">Voir les équipes de la journée</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Entraineurs</a>
				<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
					<a class="dropdown-item administrateur d-none" href="#">Ajouter un entraineur</a>
					<a class="dropdown-item" href="#">Voir les entraineurs</a>
					<a class="dropdown-item secretaire d-none" href="#">Modifier un entraineur</a>
					<a class="dropdown-item" href="#">Voir les équipes de l'entraineur</a>
				</div>
			</li>
      <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Adhérents</a>
				<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
					<a class="dropdown-item administrateur d-none" href="#">Ajouter un adhérent</a>
					<a class="dropdown-item" href="#">Voir les adhérent</a>
					<a class="dropdown-item secretaire d-none" href="#">Modifier un adhérent</a>
					<a class="dropdown-item" href="#">Voir les adhérents d'une équipe</a>
				</div>
			</li>
      <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Planning</a>
				<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
					<a class="dropdown-item administrateur d-none" href="#">Affecter une équipe</a>
					<a class="dropdown-item" href="#">Voir le planning complet</a>
					<a class="dropdown-item secretaire d-none" href="#">Modifier une affectation</a>
				</div>
			</li>
      <!-- <img class="img-login" src="img/login.png" alt="Login" data-toggle="modal" data-target="#myModal"> -->
    </ul>
  </div>
  <?php
  if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
  {
    echo '<img id="imgLogin" class="img-login" src="img/login.png" data-toggle="modal" data-target="#myModal" />';
  }
  else
  {
    echo '<img id="imgLogout" class="img-login" src="img/logout.png" />';
  }
  ?>
	<p class="big-title">Le sport c'est bien !</p>
</nav>
		<div class="main-menu" id="main-menu">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/natation.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/arc.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/hand.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/rugby.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/basket.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/foot.jpg" alt="Sixth slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- <div class="main-menu">
			<div id="quotes">
				<div class="quotes-box">
					<img class="item-1"src="img/natation.jpg" alt="">
					<img class="item-2"src="img/arc.jpg" alt="">
					<img class="item-3"src="img/hand.jpg" alt="">
				</div>
			</div>
		</div> -->
