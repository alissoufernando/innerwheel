@section('styles')
<link href="{{ asset('assets/dash/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
<div>
    <!--start page wrapper -->
		<div wire:ignore class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Activités</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Activités</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listes des Activités</li>
							</ol>
						</nav>
					</div>
                    <div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('admin.activite-add') }}" type="button" class="btn btn-outline-primary">Ajouter</a>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Liste des Activités</h6>
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
										<th>Nom</th>
										<th>description</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($activite_actions as $activite_action)
                                    <tr>
										<td>{{ $i++ }}</td>
										<td>{{ $activite_action->name }}</td>
                                        <td>{{ $activite_action->description }}</td>
										<td>
                                            <a href="{{route('admin.activite-edit',['id' => $activite_action->id])}}" style="margin-right: 12px; margin-left:15px" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier Activité"> <i class="lni lni-pencil-alt text-primary"></i></a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" wire:click.prevent="deleteActiviteAction({{ $activite_action->id }})"> <i class="lni lni-trash text-danger"></i> </a>
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
    {{-- @include('livewire.dashboard.inscriptions.statut') --}}

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
