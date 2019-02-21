<!DOCTYPE html>
<html lang="en">

      <!-- head -->
      <?php $this->load->view("depan/_partialdepan/head.php") ?>  

  <body id="page-top">

        <!-- Navigation -->
        <div class="container">
            <?php $this->load->view("depan/_partialdepan/navigation.php") ?>
            <br>
            <center><div class="row container">
                <div class="alert text-black alert-info col-sm col-10">
                    <strong>EVENT SCHEDULE</strong></a>
                </div>
                <div class="alert alert-info col-sm col-2">
                    <a href="<?php echo site_url('admin/perkuliahan/kegiatan/add_kegiatan')?>" role="button"><i class="fas fa-plus text-black"></i></a>
                </div></center>
            </div>        
            <hr>
        <div>
        

        <!-- hari demi hari -->
        
        <?php foreach($kegiatan as $data):?>
            <?php if($data->status_kegiatan == 'belum'):?>
                         <center>
                            <div class="row container">
                                <button type="button" class="btn btn-warning text-white btn-sm col-2"><i class="fas fa-fw fa-book"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary bg-warning text-white btn-sm col-9"><?php echo $data->nama_kegiatan?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <button type="button" class="btn btn-danger btn-sm col-2"><i class="fas fa-fw fa-clock"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $data->jam_mulai."-".$data->jam_selesai?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <button type="button" class="btn btn-success btn-sm col-2"><i class="fas fa-calendar-alt"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $data->tanggal?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <button type="button" class="btn btn-info btn-sm col-2"><i class="fas fa-place-of-worship"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $data->tempat?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <a data-toggle="modal" data-target="#ModalHapus<?php echo $data->id_kegiatan?>"
								class="btn btn-small text-danger"><i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </center>
                    <hr>
                    <?php endif?>
                <!-- untuk praktikum -->
        <?php endforeach?>
        <center><div class="row container">
            <div class="alert alert-success col-sm col-12">
                    <center><strong>DONE HOMEWORK LIST</strong></a></center>
            </div></center>
        </div>
        <?php foreach($kegiatan as $data):?>
            <br>    
                    <?php if($data->status_kegiatan == 'selesai'):?>
                         <center>
                            <div class="row container">
                                <button type="button" class="btn btn-success text-white btn-sm col-2"><i class="fas fa-fw fa-book"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary bg-success text-white btn-sm col-9"><?php echo $data->nama_kegiatan?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <button type="button" class="btn btn-danger btn-sm col-2"><i class="fas fa-fw fa-clock"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $data->jam_mulai."-".$data->jam_selesai?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <button type="button" class="btn btn-warning text-white btn-sm col-2"><i class="fas fa-calendar-alt"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $data->tanggal?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <button type="button" class="btn btn-info btn-sm col-2"><i class="fas fa-place-of-worship"></i></button>
                                <button type="button" class="btn btn-white btn-sm col-1"></i></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $data->tempat?></button>
                            </div>
                        </center>
                        <center>
                            <div class="row container">
                                <a data-toggle="modal" data-target="#ModalHapus<?php echo $data->id_kegiatan?>"
								class="btn btn-small text-danger"><i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </center>

                    <hr>
                    <?php endif?>
                <!-- untuk praktikum -->
        <?php endforeach?>

        <!--Modal hapus pengeluaran-->
		    <?php foreach ($kegiatan as $data):?>
				<div class="modal fade" id="ModalHapus<?php echo $data->id_kegiatan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Status Tugas</h4>
							</div>
							<form class="form-horizontal" action="<?php echo base_url().'admin/perkuliahan/kegiatan/status_kegiatan'?>" method="post" enctype="multipart/form-data">
							<div class="modal-body">
									<div class="form-group">
										<label for="inputUserName"> Bagaimana dengan kegiatan anda yang <strong><?php echo $data->nama_kegiatan?> </strong> Pak.? apakah sudah selesai.?</label>
										<div class="col-sm-7">
										<input type="hidden" name="xid" value="<?php echo $data->id_kegiatan;?>">
										</div>
									</div>

                                <div class="form-check-inline">
										<input type="radio" class="form-check-input" name="xstatus" value="belum">Belum
										<input type="radio" class="form-check-input" name="xstatus" value="selesai">Selesai
										</label>
								</div>
							
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger btn-flat" id="simpan">Send</button>
							</div>
							</form>
						</div>
					</div>
				</div>
   		 <?php endforeach; ?>
        
        
        <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
        </div>
        <br>
        <hr>
        <?php $this->load->view("depan/_partialdepan/js.php") ?>
        <div class="container">
            <?php $this->load->view("depan/_partialdepan/footer.php")?>
        </div>
    
  </body>

</html>
