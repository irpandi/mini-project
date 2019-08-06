        <footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2019 <a href="#">PDAM</a>.</strong> All rights reserved.
		</footer>
	</div>

	<!-- jQuery 3 -->
	<script src="<?=base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?=base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

	<!--DataTables-->
	<script type="text/Javascript" src="<?=base_url('assets/t/d/js/jquery.dataTables.min.js'); ?>"></script>
	<script type="text/Javascript" src="<?=base_url('assets/t/d/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script type="text/Javascript" src="<?=base_url('assets/row/js/dataTables.rowReorder.min.js'); ?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/responsive/js/dataTables.responsive.min.js'); ?>"></script>

	<!-- AdminLTE App -->
	<script src="<?=base_url('assets/dist/js/adminlte.min.js'); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#table').DataTable({
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true
			});
		});
    </script>
</body>
</html>