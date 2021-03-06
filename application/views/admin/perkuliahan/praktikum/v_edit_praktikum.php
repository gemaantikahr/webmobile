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
						<a href="<?php echo site_url('admin/buku1/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <?php foreach ($praktikum as $data): ?>
					<div class="card-body">

						<form action="<?php echo base_url().'admin/perkuliahan/praktikum/update_praktikum'?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Id Praktikum*</label>
								<input class="form-control" type="text" name="xid" value="<?php echo $data->id_praktikum?>" readonly/>
                            </div>
                            
							<div class="form-group">
								<label for="name">Nama Praktikum*</label>
								<input class="form-control" type="text" name="xnama" value="<?php echo $data->nama_praktikum?>" />
                            </div>
							<div class="form-group">
								<label for="name">Nama Asisten*</label>
								<input class="form-control" type="text" name="xnamaasisten" value="<?php echo $data->nama_asisten?>" />
							</div>
							<div class="form-group">
							<label for="name">Hari*</label>
                                        <select class="form-control" id="sel1" name="xhari">
                                        <?php foreach($hari as $key):?>
                                            <option value="<?php echo $key->nama_hari?>"><?php echo $key->nama_hari?></option> 
                                        <?php endforeach?> 
                                        </select>
                            </div>
							<div class="form-group">
								<label for="name">Jam mulai*</label>
								<input class="form-control" type="time" name="xmulai" value="<?php echo $data->jam_mulai?>" />
							</div>
							<div class="form-group">
								<label for="name">Jam selesai*</label>
								<input class="form-control" type="time" name="xselesai" value="<?php echo $data->jam_selesai?>" />
							</div>
							<div class="form-group">
								<label for="name">Temmpat*</label>
								<input class="form-control" type="text" name="xtempat" value="<?php echo $data->tempat?>" />
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
                    <?php endforeach; ?>
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
