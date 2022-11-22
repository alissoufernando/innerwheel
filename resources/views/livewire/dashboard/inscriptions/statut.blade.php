
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier le Statut</h5>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='storeStatut'>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Statut : </label>
								<span class="badge bg-success">Validé</span>

                    </div>
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Reçu du virement</label>
                        <input class="form-control" type="file" name="" id="" wire:model="piece">
                    </div>
                </div>
            </div>
            <div class="modal-footer float-md-start">
                <button type="submit" class="btn btn-outline-primary btn-sm">Valider l'inscription</button>
                <button type="button" wire:click.prevent='resetInputFields' class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Annuler</button>
            </div>
            </form>
        </div>
    </div>
</div>
