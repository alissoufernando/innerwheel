@section('styles')
<link href="{{ asset('assets/dash/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
<div>
    <!--start page wrapper -->
		<div wire:ignore class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Hébergements</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Listes des Hébergements</li>
							</ol>
						</nav>
					</div>
					{{-- <div class="ms-auto">
						<div class="btn-group">
							<button data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal" type="button" class="btn btn-outline-primary">Ajouter</button>
						</div>
					</div> --}}
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Liste des Hébergements</h6>
				<hr/>
                {{--
                <th>Nombre Place total</th>
                <th>Nombre Place restante</th>
                <th>Nombre Place prise</th>
                --}}
                {{--
                <td>{{ $inscription->option_hebergement->tarifs->placeI }}</td>
                <td>{{ $inscription->option_hebergement->tarifs->place }}</td>
                <td>{{ $inscription->option_hebergement->tarifs->placeI -  $inscription->option_hebergement->tarifs->place}}</td>
                --}}
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
										<th>Hôtel</th>
										<th>Chambre</th>
										<th>Options</th>
										<th>Compagnon</th>
										<th>Moyens Arrivée</th>
										<th>Arrivée-Départ</th>
                                        <th>Club</th>
									</tr>
								</thead>
								<tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($inscriptions as $inscription)
                                        @if ($inscription->option_hebergement == null)

                                        @else
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $inscription->individu->nom }}</td>
                                                <td>{{ $inscription->individu->prenoms }}</td>
                                                <td>{{ $inscription->option_hebergement->tarifs->lieu->libelle }}</td>
                                                <td>{{ $inscription->option_hebergement->tarifs->libelle }}</td>
                                                <td>{{ $inscription->option_hebergement->libelle }}</td>
                                                <td>{{ $inscription->compagnons }}</td>
                                                <td>
                                                    @if ( $inscription->mode_arrivee_id == 1)
                                                        Avion
                                                    @else
                                                        Terre
                                                    @endif
                                                </td>
                                                <td>{{ $inscription->date_arrivee }} au {{ $inscription->date_depart }}</td>

                                                <td>{{ $inscription->individu->club }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->

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
