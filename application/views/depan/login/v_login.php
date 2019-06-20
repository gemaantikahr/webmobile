<!DOCTYPE html>
<html lang="en">

      <!-- head -->
      <?php $this->load->view("depan/_partialdepan/head.php") ?>  

  <body id="page-top">

        <!-- Navigation -->
        <div class="container">
        <center><h2>Login</h2></center>
        <form action="/action_page.php">
            <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="usr" name="username">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
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
