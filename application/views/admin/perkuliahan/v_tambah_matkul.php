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
					<div class="card-body">
						<form action="<?php echo base_url().'admin/perkuliahan/matakuliah/insert_matkul'?>" method="post" enctype="multipart/form-data" >                            
							<div class="form-group">
								<label for="name">Nama matkul*</label>
								<input class="form-control" type="text" name="xnamamatkul" placeholder="Nama Matkul.."/>
                            </div>
							<div class="form-group">
								<label for="name">Kelas matkul*</label>
								<input class="form-control" type="text" name="xkelas" placeholder="Kelas Matkul.."/>
                            </div>
                            <div class="form-group">
								<label for="name">Sks*</label>
								<input class="form-control" type="number" name="xsks" placeholder="Sks.."/>
							</div>
                            <div class="form-group">
								<label for="name">Semester*</label>
								<input class="form-control" type="number" name="xsemester" placeholder="Semester.."/>
							</div>
							<div class="form-group">
								<label for="name">Dosen*</label>
								<input class="form-control" type="text" name="xnamadosen" placeholder="Dosen.."/>
							</div>

							<div class="form-group">
										<label for="name">Hari*</label>
                                        <select class="form-control" id="sel1" name="xhari">
                                        <?php foreach($hari as $data):?>
                                            <option value="<?php echo $data->nama_hari?>"><?php echo $data->nama_hari?></option> 
                                        <?php endforeach?> 
                                        </select>
                            </div>
							<div class="form-group">
								<label for="name">Jam mulai*</label>
								<input class="form-control" type="time" name="xmulai" placeholder="Jam mulai.."/>
							</div>
							<div class="form-group">
								<label for="name">Jam selesai*</label>
								<input class="form-control" type="time" name="xselesai" placeholder="Jam selesai.." />
							</div>
							<div class="form-group">
								<label for="name">Temmpat*</label>
								<input class="form-control" type="text" name="xtempat" placeholder="Tempat.." />
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
