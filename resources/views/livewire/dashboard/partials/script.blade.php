<script src="https://cdn.tiny.cloud/1/funsboobt7jrtr248tf6ytbzoleqlwq7xx3232ascdfvdk73/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/dash/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/dash/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('assets/dash/plugins/jquery-knob/jquery.knob.js') }}"></script>
  <script>
	  $(function() {
		  $(".knob").knob();
	  });
  </script>
  <script src="{{ asset('assets/dash/js/index.js') }}"></script>
<!--app JS-->
<script src="{{ asset('assets/dash/js/app.js') }}"></script>
@yield('scripts')

