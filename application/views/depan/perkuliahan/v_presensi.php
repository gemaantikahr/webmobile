<!DOCTYPE html>
<html lang="en">

      <!-- head -->
      <?php $this->load->view("depan/_partialdepan/head.php") ?>  

  <body id="page-top">

        <!-- Navigation -->
        <div class="container">
            <?php $this->load->view("depan/_partialdepan/navigation.php") ?>
            <br>
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="alert text-black alert-danger">
                        <strong>Data Presensi</strong>
                    </div>
                </div>
                </div>
            </div>        
        <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table  class="table table-striped">
                    <thead style="text-align:center;">
                        <th width="33%">Nama matkul</th>
                        <th width="33%">Masuk</th>
                        <th width="33%">Tidak</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Appl</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Matdis</td>
                        <td>6</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Alpro</td>
                        <td>6</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Prpl</td>
                        <td>6</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Kripto</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>


        

        <!-- hari demi hari -->                  
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
