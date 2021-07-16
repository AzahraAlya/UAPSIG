<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/AdminLTE-3.1.0/') ?>dist/js/pages/dashboard.js"></script>
<script>

	var mymap = L.map('mapid').setView([-5.405944168293072, 105.20987495693895], 10);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

<?php foreach($data as $a) : ?>
    var marker = L.marker([<?= $a['coord']; ?>]).addTo(mymap);
	marker.bindPopup("<?= $a['nama']; ?>").openPopup();
<?php endforeach;?>

// L.circle([-4.658555, 103.739708], 10000, {
// 		color: 'red',
// 		fillColor: '#f03',
// 		fillOpacity: 0.5
// 	}).addTo(mymap).bindPopup("I am a circle.");

	L.polygon([
		[-4.929515, 103.573608],
            [-4.777626, 103.77273],
            [-4.881626, 103.871613],
            [-4.870679, 104.194336],
            [-4.830997, 104.36737],
            [-4.670874, 104.28222],
            [-4.517559, 104.313812],
            [-4.38886, 104.35501],
            [-4.295744, 104.462128],
            [-4.219052, 104.62554],
            [-4.264246, 104.80270],
            [-3.940981, 105.14328],
            [-3.847812, 105.29434],
            [-3.803965, 105.26825],
            [-3.720375, 105.32180],
            [-3.721745, 105.349274],
            [-3.775189, 105.375366],
            [-3.7793, 105.438538],
            [-3.93413, 105.623932],
            [-4.138243, 105.834045],
            [-4.382013, 105.869751],
            [-4.439521, 105.926056],
            [-4.640761, 105.924683],
            [-4.705091, 105.901337],
            [-4.874784, 105.88348],
            [-4.943197, 105.917816],
            [-5.233187, 105.871124],
            [-5.276948, 105.864258],
            [-5.528511, 105.828552],
            [-5.581817, 105.842285],
            [-5.693882, 105.817566],
            [-5.842813, 105.799713],
            [-5.915215, 105.713196],
            [-5.857841, 105.691223],
            [-5.844179, 105.600586],
            [-5.816856, 105.575867],
            [-5.702081, 105.547028],
            [-5.697982, 105.509949],
            [-5.626919, 105.393219],
            [-5.466997, 105.309448],
            [-5.4793, 105.2696233],
            [-5.521676, 105.261383],
            [-5.594118, 105.250397],
            [-5.726678, 105.225677],
            [-5.779966, 105.228424],
            [-5.830518, 105.173492],
            [-5.618719, 104.773865],
            [-5.533978, 104.69970],
            [-5.509374, 104.5884],
            [-5.544913, 104.556885],
            [-5.57225, 104.561005],
            [-5.723945, 104.659882],
            [-5.749907, 104.654388],
            [-5.835982, 104.720306],
            [-5.889261, 104.712067],
            [-5.939802, 104.746399],
            [-5.957558, 104.5610053],
            [-5.916581, 104.541779],
            [-5.885162, 104.565125],
            [-5.726678, 104.411316],
            [-5.717113, 104.4126893],
            [-5.643319, 104.28772],
            [-5.620086, 104.312433],
            [-5.529877, 104.208069],
            [-5.311134, 103.984222],
            [-5.271478, 103.995209],
            [-5.246863, 103.894958],
            [-5.218144, 103.893585],
            [-5.173011, 103.933411],
            [-5.119669, 103.85373],
            [-5.048539, 103.778229],
            [-5.063586, 103.748016]
	]).addTo(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }

    mymap.on('click', onMapClick);
</script>
</body>
</html>
