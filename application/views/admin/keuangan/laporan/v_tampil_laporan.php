<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="container-fluid">
                    <h2>Laporan Keuangan</h2>
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 mb-3">
                            <div class="card bg-info text-white">
                                <?php foreach($saldo as $data):?>
                                    <div class="card-body"><h5>Saldo : Rp. <?php echo $data->jumlah_saldo?></h5></div>
                                <?php endforeach?>
                            </div>
                        </div>    
                        <div class="col-xl-4 col-sm-6 mb-3">
                            <div class="card bg-info text-white">
                                <?php foreach($pengeluaran as $data):?>
                                    <div class="card-body"><h5>Total Pengeluaran : Rp. <?php echo $data->jumlah_pengeluaran?></h5></div>
                                <?php endforeach?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 mb-3">
                            <div class="card bg-info text-white">
                                <?php foreach($pemasukan as $data):?>
                                    <div class="card-body"><h5>Total Pemasukan : Rp. <?php echo $data->jumlah_pemasukan?></h5></div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
                
			</div>

			
			
		</div>

			</div>

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
