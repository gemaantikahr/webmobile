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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pemasukan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url().'admin/pemasukan/simpan_pemasukan'?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama Pemasukan*</label>
								<input class="form-control" type="text" name="xnamapemasukan"/>
                            </div>
                            
                            <div class="form-group">
								<label for="name">Jumlah*</label>
								<input class="form-control" type="text" name="xjumlahpemasukan"/>
                            </div>

							<div class="form-group">
								<label for="name">Keterangan*</label>
								<input class="form-control" type="text" name="xketerangan"/>
                            </div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />                        
                        </form>

					</div>

					<div class="card-footer small text-muted">
						* Isi Semua Data
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
