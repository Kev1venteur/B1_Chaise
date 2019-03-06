<div class="modifier">
	<form action='index.php?vue=club&action=modifier&id=' method='POST'>
    <table>
      <tr>
        <h4 class="title">Modifier un club</h4>
        <td>
          <div class="form-group">
						<label for="nomClub">Nom</label>
            <input name="nomClub" type="text" class="form-control" value="<?php echo $monClub->getNomClub();?>" id="nomClub">
          </div>
          <div class="form-group">
						<label for="adresseClub">Adresse</label>
            <input name="adresseClub" type="text" class="form-control" value="<?php echo $monClub->getAdresseClub();?>" id="adresseClub">
          </div>
          <div class="form-group">
						<label for="emailClub">Email</label>
            <input name="emailClub" type="text" class="form-control" value="<?php echo $monClub->getEmailClub();?>" id="emailClub">
          </div>
          <div class="form-group">
						<label for="dateCreation">Date</label>
            <input name="dateCreation" type="date" class="form-control" value="<?php echo $monClub->getDateCreationClub();?>" id="dateCreation">
          </div>
          <div class="form-group">
						<label for="resumeActiviteClub">Résumé</label>
            <textarea name="resumeActiviteClub" type="text" class="form-control" placeholder="<?php echo $monClub->getResumeActiviteClub();?>" id="resumeActiviteClub"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" class="btn btn-secondary" value='Modifier'>Valider la modification</button>
        </td>
      </tr>
		</table>
  </form>
</div>
