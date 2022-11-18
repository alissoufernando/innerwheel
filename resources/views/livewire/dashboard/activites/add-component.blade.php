@section('styles')
<link href="{{ asset('assets/dash/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/dash/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/dash/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/dash/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
@endsection
<div>
<!--start page wrapper -->
<div class="page-wrapper">
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
                    <a href="{{ route('admin.activite-index') }}" class="btn btn-outline-primary">Voir liste</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <h6 class="mb-0 text-uppercase">Ajouter une Activité</h6>
                <hr/>
            <div class="col-xl-9 mx-auto">
                @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                <div class="card">
                    <form wire:submit.prevent='storeActiveAction'>
                        <div class="row card-body">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom02" class="form-label">Titre</label>
                                        <input class="form-control mb-3" type="text" placeholder="le titre" wire:model="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="image">Image</label>:</label>
                                        <input class="form-control mb-3" id="image" type="file" accept=".jpg, .png, image/jpeg, image/png" wire:model="image">
                                        @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" class="px-2" width="100">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="image">Description</label>:</label>
                                <textarea class="form-control" wire:model="description">Description</textarea>

                            </div>
                            <div wire:ignore class="col-md-12 mb-3">
                                <label class="form-label" for="image">Contenu</label>:</label>
                                <textarea id="mytextarea" name="mytextarea" wire:model="contenu">Contenu</textarea>
                            </div>
                            <div class="col-md-12 mt-5">
                                <button type="submit"  class="btn btn-outline-primary btn-sm float-end">Ajouter</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
</div>

@section('scripts')
<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
   tinymce.init({
            selector:'#mytextarea',
            setup:function(editor){
                editor.on('Change', function(e){
                    tinyMCE.triggerSave();
                    var sd_data = $('#mytextarea').val();
                    @this.set('contenu', sd_data);
                });
            }
        });
</script>
<script src="{{ asset('assets/dash/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/datetimepicker/js/legacy.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/datetimepicker/js/picker.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/datetimepicker/js/picker.time.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/datetimepicker/js/picker.date.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
<script>
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    }),
    $('.timepicker').pickatime()
</script>
<script>
    $(function () {
        $('#date-time').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD HH:mm'
        });
        $('#date').bootstrapMaterialDatePicker({
            time: false
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm'
        });
    });
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


