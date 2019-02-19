<!DOCTYPE html>
<html lang="en">

      <!-- head -->
      <?php $this->load->view("depan/_partialdepan/head.php") ?>  

  <body id="page-top">

    <!-- Navigation -->
    <?php $this->load->view("depan/_partialdepan/navigation.php") ?>

    

    <!-- hari demi hari -->
    <?php foreach($hari as $data):?>
    <br>
    <div class="container-fluid">
          <a class="btn btn-info btn-sm col-12" href="#" role="button"> <?php echo $data->nama_hari?></a>
        <?php foreach($jadwal as $key):?>
          <?php if($data->nama_hari==$key->harikuliah):?>
            <!-- untuk perkuliahan -->
            <hr>
          <center><div class="row container">
          <button type="button" class="btn btn-warning text-white btn-sm col-2"><i class="fas fa-fw fa-book"></i></button>
          <button type="button" class="btn btn-white btn-sm col-1"></i></button>
          <button type="button" class="btn btn-outline-secondary bg-warning text-white btn-sm col-9"><?php echo $key->nama_matkul?></button>
          </div></center>
          <center><div class="row container">
          <button type="button" class="btn btn-danger btn-sm col-2"><i class="fas fa-fw fa-clock"></i></button>
          <button type="button" class="btn btn-white btn-sm col-1"></i></button>
          <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $key->mulaikuliah."-".$key->selesaikuliah?></button>
          </div></center>
          <center><div class="row container">
          <button type="button" class="btn btn-info btn-sm col-2"><i class="fas fa-place-of-worship"></i></button>
          <button type="button" class="btn btn-white btn-sm col-1"></i></button>
          <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $key->tempatkuliah?></button>
          </div></center>
          <?php endif?>
          <!-- untuk praktikum -->
        <?php endforeach ?>
        <?php if($data->nama_hari==$key->haripraktikum):?>
          <hr>
          <center><div class="row container">
          <button type="button" class="btn btn-warning text-white btn-sm col-2"><i class="fas fa-fw fa-book"></i></button>
          <button type="button" class="btn btn-white btn-sm col-1"></i></button>
          <button type="button" class="btn btn-outline-secondary bg-danger text-white btn-sm col-9"><?php echo $key->nama_praktikum?></button>
          </div></center>
          <center><div class="row container">
          <button type="button" class="btn btn-danger btn-sm col-2"><i class="fas fa-fw fa-clock"></i></button>
          <button type="button" class="btn btn-white btn-sm col-1"></i></button>
          <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $key->mulaipraktikum."-".$key->selesaipraktikum?></button>
          </div></center>
          <center><div class="row container">
          <button type="button" class="btn btn-info btn-sm col-2"><i class="fas fa-place-of-worship"></i></button>
          <button type="button" class="btn btn-white btn-sm col-1"></i></button>
          <button type="button" class="btn btn-outline-secondary btn-sm col-9"><?php echo $key->tempatpraktikum?></button>
          </div></center>
          <?php endif?>
    </div>
    <?php endforeach?>
    
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <br>  
    <?php $this->load->view("depan/_partialdepan/js.php") ?>
    <div class="container">
          <?php $this->load->view("depan/_partialdepan/footer.php")?>
    </div>
    
  </body>

</html>
