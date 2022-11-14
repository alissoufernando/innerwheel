<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/site/assets/img/logo1.jpg') }}" type="image/png" />

    <title>INNERWHEEL</title>
    @include('livewire.auth.partials.style')
    @livewireStyles()

</head>

<body class="bg-login">
	<!--wrapper-->
    {{$slot}}

	<!--end wrapper-->
    @livewireScripts()
    @include('livewire.auth.partials.script')
</body>

</html>
