<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart | masdedys.github.io</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 85vh;">
            <div class="col-md-8 text-center">
                <h2>Chart</h2>      
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <!-- copyright start -->
      <div class="copyright container-fluid">
            <div class="copyright-item container">
                <div class="row">
                    <div class="col-md text-dark">
                        <small>&copy;2026&nbsp;<a href="https://masdedys.github.io/">masdedys.github.io</a>, All Rights Reserved</small>
                    </div>
                </div>
            </div>
      </div>
    <!-- copyright end -->

    <script src="chart.js/dist/chart.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>
	<?php 
		$conn = mysqli_connect("localhost","root","","exampledb");
		$account = mysqli_query($conn,"select * from account");
		while($data = mysqli_fetch_array($account)){
			$year[] = $data['year'];
			$sale[] = $data['sale'];
			// $pasien = mysqli_query($conn,"select * from account where year='$year'");
			// 	$jumlah_sale[] = mysqli_num_rows($pasien);
		}
	 ?>
	const ctx = document.getElementById('myChart');
	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?php echo json_encode($year); ?>,
			datasets: [{
				label: '# Penjualan',
				data: <?php echo json_encode($sale); ?>,
				backgroundColor: [
					'rgba(255, 99, 71, 1)',
					'rgba(9, 31, 242, 0.8)',
					'rgba(240, 255, 45, 0.8)'
					],
				borderColor: [
					'rgba(255, 99, 71, 1)',
					'rgba(9, 31, 242, 0.8)',
					'rgba(240, 255, 45, 0.8)'
					],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
</script>
</body>
</html>