@section('styles')
<link href="{{ asset('assets/dash/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
<div>
    <!--start page wrapper -->
		<div wire:ignore class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Utilisateur</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Configuration</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listes des utilisateurs</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal" type="button" class="btn btn-outline-primary">Ajouter</button>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Liste des utilisateurs</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
						<div wire:ignore class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nom d'utilisateur</th>
										<th>Email de l'utilisateur</th>
										<th>Rôles</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($users as $user)
                                    <tr>
										<td>{{ $i++ }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>
                                        {{-- @empty ($user->roles->name)
                                            pas de rôle
                                        @else
                                        {{ $user->roles}}
                                        @endempty --}}
                                        {{implode(',', $user->roles()->get()->pluck('name')->toArray())}}
                                        </td>
										<td>
                                            <a style="margin-right: 12px; margin-left:15px" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal" wire:click.prevent='getElementById({{ $user->id }})' data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier"> <i class="lni lni-pencil-alt text-warning"></i></a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" wire:click.prevent="deleteUser({{ $user->id }})"> <i class="lni lni-trash text-danger"></i> </a>
                                        </td>
									</tr>
                                    @endforeach
                                </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
    @include('livewire.dashboard.administration.user.modal')

</div>

@section('scripts')
<script src="{{ asset('assets/dash/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );

			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
    <script>
        $(function () {
            $('[data-bs-toggle="popover"]').popover();
            $('[data-bs-toggle="tooltip"]').tooltip();
        })
    </script>

@endsection
