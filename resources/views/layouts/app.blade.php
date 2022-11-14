<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/site/assets/img/logo1.jpg') }}">
	<title>INNERWHEEL</title>
    @include('livewire.dashboard.partials.style')
    @livewireStyles()
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('livewire.dashboard.partials.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('livewire.dashboard.partials.header')
		<!--end header -->
		<!--start page wrapper -->
		{{$slot}}
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('livewire.dashboard.partials.footer')
	</div>
	<!--end wrapper-->
    @livewireScripts()
    @include('livewire.dashboard.partials.script')
    @include('livewire.dashboard.partials.confirmation-de-suppression')
</body>

</html>
