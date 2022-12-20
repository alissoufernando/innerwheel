
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                @if ($this->role_id)
                <h5 class="modal-title">Modifier un rôle</h5>
                @else
                <h5 class="modal-title">Ajouter un Rôle</h5>
                @endif
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='storeRole'>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Rôle</label>
					    <input class="form-control mb-3" type="text" placeholder="Nom du role" wire:model.lazy='name'>
                    </div>
                </div>
            </div>
            <div class="modal-footer float-md-start">
                <button type="button" wire:click.prevent='resetInputFields' class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Annuler</button>
                @if ($this->role_id)
                <button type="submit" class="btn btn-outline-primary btn-sm">Modifier</button>
                @else
                <button type="submit" class="btn btn-outline-primary btn-sm">Ajouter</button>
                @endif
            </div>

        </form>
        </div>
    </div>
</div>
