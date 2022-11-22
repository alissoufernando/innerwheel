@section('styles')
<link href="{{ asset('assets/dash/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
<div>
    <!--start page wrapper -->
		<div wire:ignore class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Inscriptions</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inscriptions</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listes des Inscriptions</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Liste des Inscriptions</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
						<div wire:ignore class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nom</th>
										<th>Prénoms</th>
										<th>Statut</th>
										<th>Reçu</th>

										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($inscriptions as $inscription)
                                    <tr>
										<td>{{ $i++ }}</td>
										<td>{{ $inscription->individus->nom }}</td>
                                        <td>{{ $inscription->individus->prenoms }}</td>
                                        <td>
                                            @if ($inscription->statut_id == 1)
                                            <span class="badge bg-danger">{{ $inscription->statut->libelle }}</span>
                                            @endif
                                            @if ($inscription->statut_id == 2)
                                            <span class="badge bg-warning text-dark">{{ $inscription->statut->libelle }}</span>
                                            @endif
                                            @if ($inscription->statut_id == 3)
                                            <span class="badge bg-success">{{ $inscription->statut->libelle }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($inscription->paiement->piece)
                                            <p> Voir le reçu
                                            <a href="{{ asset('storage')}}/{{$inscription->paiement->piece}}" target="_blank" rel="noopener noreferrer"> ici</a>
                                            </p>

                                            @else
                                            <p> Pas de reçu</p>
                                            @endif
                                        </td>

										<td>
                                            <a style="margin-right: 12px; margin-left:15px" data-bs-toggle="tooltip" data-bs-placement="top" title="Détails"> <i class="lni lni-pencil-alt text-primary"></i></a>
                                            <a style="margin-right: 12px; margin-left:15px" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal" wire:click.prevent='getElementById({{ $inscription->id }})' data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier Statut"> <i class="lni lni-checkbox text-success"></i></a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" wire:click.prevent="deleteInscription({{ $inscription->id }})"> <i class="lni lni-trash text-danger"></i> </a>
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
    @include('livewire.dashboard.inscriptions.statut')

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
