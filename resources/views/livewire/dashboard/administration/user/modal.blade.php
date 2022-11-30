
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                @if ($this->user_id)
                <h5 class="modal-title">Modifier {{ $this->name }}</h5>
                @else
                <h5 class="modal-title">Ajouter un utilisateur</h5>
                @endif
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='saveUser'>
            <div class="modal-body">
                @if ($this->user_id)
                <div class="row">
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Nom d'utilisateur</label>
					    <input class="form-control mb-3" type="name" placeholder="le nom de l'utilisateur" wire:model.lazy='name'>
                    </div>
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Adresse Mail</label>
					    <input class="form-control mb-3" type="email" placeholder="l'emai de l'utilisateur" wire:model.lazy='email'>
                    </div>
                    <div class="col-md-12">
                        <span class="input-group-text mb-3" id="">Les rôles</span>
                        @foreach ($roles as $role)
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="{{$role->id}}" id="flexCheckChecked" wire:model="roless"
                                @foreach ($this->myUserE->roles as $userRole)
                                  @if ($userRole->id == $role->id)
                                      checked
                                  @endif
                                @endforeach>
                          <label class="form-check-label" for="flexCheckChecked">{{ $role->name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Nom d'utilisateur</label>
					    <input class="form-control mb-3" type="name" placeholder="le nom de l'utilisateur" wire:model.lazy='name'>
                    </div>
                    <div class="col-md-12">
						<label for="validationCustom02" class="form-label">Adresse Mail</label>
					    <input class="form-control mb-3" type="email" placeholder="l'emai de l'utilisateur" wire:model.lazy='email'>
                    </div>
                    <div class="col-md-12">
                        <span class="input-group-text mb-3" id="">Les rôles</span>
                        @foreach ($roles as $role)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $role->id }}" id="flexCheckChecked" wire:model="roless"/>
                            <label class="form-check-label" for="flexCheckChecked">{{ $role->name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>


            <div class="modal-footer float-md-start">
                @if ($this->user_id)
                <button type="submit" class="btn btn-outline-primary btn-sm">Modifier</button>
                @else
                <button type="submit" class="btn btn-outline-primary btn-sm">Ajouter</button>
                @endif
                <button type="button" wire:click.prevent='resetInputFields' class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Annuler</button>
            </div>
            </form>
        </div>
    </div>
</div>
