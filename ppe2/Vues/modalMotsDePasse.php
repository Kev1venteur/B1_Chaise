	<div class="modal fade" id="motsDePasse" role="dialog" style="color:#000;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><span class="fas fa-lock"></span>Récupération du mots de passe</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" id="login" method="post">
						<div class="form-group">
							<label for="id"><span class="fas fa-user"></span> Identifiant</label>
							<input type="text" class="form-control" id="id" name="id" placeholder="Identifiant" required>
						</div>
					</form>
				</div>
				<div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" class="submit"><span class="fas fa-times"></span>Récupérer</button>
					<button type="button"  class="btn btn-danger btn-default pull-left" data-dismiss="modal" ><span class="fas fa-times"></span> Cancel</button>
				</div>
			</div>
		</div>
	</div>
