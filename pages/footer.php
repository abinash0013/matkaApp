
		<footer class="footer">
			<div class="container-fluid">
				<div class="copyright text-center w-100">
					<!-- <a href="#">@ 2021</a> -->
				</div>				
			</div>
		</footer>
	</div>	
	<!-- Custom template | don't include it in your project! -->
	<div class="custom-template">
		<div class="title">Settings</div>
		<div class="custom-content">
			<div class="switcher">
				<div class="switch-block">
					<h4>Logo Header</h4>
					<div class="btnSwitch">
						<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
						<br/>
						<button type="button" class="selected changeLogoHeaderColor" data-color="dark2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
					</div>
				</div>
				<div class="switch-block">
					<h4>Navbar Header</h4>
					<div class="btnSwitch">
						<button type="button" class="selected changeTopBarColor" data-color="dark"></button>
						<button type="button" class="changeTopBarColor" data-color="blue"></button>
						<button type="button" class="changeTopBarColor" data-color="purple"></button>
						<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
						<button type="button" class="changeTopBarColor" data-color="green"></button>
						<button type="button" class="changeTopBarColor" data-color="orange"></button>
						<button type="button" class="changeTopBarColor" data-color="red"></button>
						<button type="button" class="changeTopBarColor" data-color="white"></button>
						<br/>
						<button type="button" class="changeTopBarColor" data-color="dark2"></button>
						<button type="button" class="changeTopBarColor" data-color="blue2"></button>
						<button type="button" class="changeTopBarColor" data-color="purple2"></button>
						<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
						<button type="button" class="changeTopBarColor" data-color="green2"></button>
						<button type="button" class="changeTopBarColor" data-color="orange2"></button>
						<button type="button" class="changeTopBarColor" data-color="red2"></button>
					</div>
				</div>
				<div class="switch-block">
					<h4>Sidebar</h4>
					<div class="btnSwitch">
						<button type="button" class="changeSideBarColor" data-color="white"></button>
						<button type="button" class="changeSideBarColor" data-color="dark"></button>
						<button type="button" class="selected changeSideBarColor" data-color="dark2"></button>
					</div>
				</div>
				<div class="switch-block">
					<h4>Background</h4>
					<div class="btnSwitch">
						<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
						<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
						<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
						<button type="button" class="selected changeBackgroundColor" data-color="dark"></button>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="custom-toggle">
			<i class="flaticon-settings"></i>
		</div> -->
	</div>
	<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="./../js/core/jquery.3.2.1.min.js"></script>
<script src="./../js/core/popper.min.js"></script>
<script src="./../js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="./../js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="./../js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>


<!-- jQuery Scrollbar -->
<script src="./../js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<!-- <script src="./../js/plugin/chart.js/chart.min.js"></script> -->

<!-- jQuery Sparkline -->
<script src="./../js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<!-- <script src="./../js/plugin/chart-circle/circles.min.js"></script> -->

<!-- Bootstrap Notify -->
<script src="./../js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="./../js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="./../js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>


<!-- Sweet Alert -->
<script src="./../js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- <script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script> -->

<!-- Datatables -->
<script src="./../js/plugin/datatables/datatables.min.js"></script>

<!-- Atlantis JS -->
<script src="./../js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<!-- <script src="./../js/setting-demo.js"></script> -->
<script src="./../js/setting-demo2.js"></script>
<script src="./../js/demo.js"></script>
<!-- <script>
	$('#lineChart').sparkline([102,109,120,99,110,105,115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: 'rgba(255, 255, 255, .5)',
		fillColor: 'rgba(255, 255, 255, .15)'
	});

	$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: 'rgba(255, 255, 255, .5)',
		fillColor: 'rgba(255, 255, 255, .15)'
	});

	$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: 'rgba(255, 255, 255, .5)',
		fillColor: 'rgba(255, 255, 255, .15)'
	});
</script> -->
<script>
	$(document).ready(function () {
		// Add Row
		// $('#add-row').DataTable( {
        //         dom: 'Bfrtip',
        //         buttons: [
        //             'copy', 'csv', 'excel', 'pdf', 'print'
        //         ]
		// } );
		var action =
			'<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
		
		
		// var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		// var mytotalIncomeChart = new Chart(totalIncomeChart, {
		// 	type: 'bar',
		// 	data: {
		// 		labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
		// 		datasets : [{
		// 			label: "Total Income",
		// 			backgroundColor: '#ff9e27',
		// 			borderColor: 'rgb(23, 125, 255)',
		// 			data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
		// 		}],
		// 	},
		// 	options: {
		// 		responsive: true,
		// 		maintainAspectRatio: false,
		// 		legend: {
		// 			display: false,
		// 		},
		// 		scales: {
		// 			yAxes: [{
		// 				ticks: {
		// 					display: false //this will remove only the label
		// 				},
		// 				gridLines : {
		// 					drawBorder: false,
		// 					display : false
		// 				}
		// 			}],
		// 			xAxes : [ {
		// 				gridLines : {
		// 					drawBorder: false,
		// 					display : false
		// 				}
		// 			}]
		// 		},
		// 	}
		// });

	});
</script>
</body>
</html>