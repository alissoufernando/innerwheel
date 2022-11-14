
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/site/assets/img/logo1.jpg') }}">

  <title>INNERWHEEL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('livewire.site.partials.style')
  @livewireStyles()
</head>

<body>

  <!-- ======= Hero Section ======= -->
    {{ $slot }}

  <!-- ======= Footer ======= -->
  @include('livewire.site.partials.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  @livewireScripts()
  @include('livewire.site.partials.script')
</body>

</html>

