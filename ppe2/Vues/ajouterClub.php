<div class="enregistrer">
	<form action='index.php?vue=club&action=enregistrer' method='POST'>
    <table>
      <tr>
        <h4 class="title">Ajouter un club</h4>
        <td>
          <div class="form-group">
            <input name="nomClub" type="text" class="form-control" placeholder="Nom" id="nomClub">
          </div>
          <div class="form-group">
            <input name="adresseClub" type="text" class="form-control" placeholder="Adresse" id="adresseClub">
          </div>
          <div class="form-group">
            <input name="emailClub" type="mail" class="form-control" placeholder="Email" id="emailClub">
          </div>
          <div class="form-group">
            <input name="dateCreation" type="date" class="form-control" placeholder="Date" id="dateCreation">
          </div>
          <div class="form-group">
            <input name="resumeActiviteClub" type="text" class="form-control" placeholder="Résumé" id="resumeActiviteClub">
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" class="btn btn-secondary" value='Valider'>Valider</button>
        </td>
      </tr>
		</table>
  </form>
</div>
