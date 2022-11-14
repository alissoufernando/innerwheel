
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier le Statut</h5>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='storeUser'>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Nom d'utilisateur</label>
					    <input class="form-control mb-3" type="name" placeholder="le nom de l'utilisateur" wire:model.lazy='name'>
                    </div>
                </div>
            </div>
            <div class="modal-footer float-md-start">
                <button type="submit" class="btn btn-outline-primary btn-sm">Modifier</button>
                <button type="button" wire:click.prevent='resetInputFields' class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Annuler</button>
            </div>
            </form>
        </div>
    </div>
</div>
