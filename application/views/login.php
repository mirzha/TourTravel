 <html> 
  <head> 
    <title>Login Admin</title> 
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/style1.css"> 
  </head> 

  <body>
   <style type="text/css">
      body
      {
          background-image: url("<?php echo base_url();?>assets/images/sea2.jpg");
          background-size: 100%;
      }
    </style> 
   
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <?php echo form_open('login/login_process') ?>
            <img src="<?php echo base_url();?>assets/images/doland.jpg" alt=""><br /><br /> 
        

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br />
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br /> 


              <input type="Submit" name="login" value="Log In" class="tombol_login">
              <br><br>
              <center><a href="<?php echo site_url ('Home') ?>">Kembali ke Home</a></center>
            </form> 

        </div> 

      </div> 

      <div class="copyright"> 
     <!--  <p style="color:#fff"> -->
      <center>
       
        </center>
        </p>
      </div> 
    </div> 
  </body> 
</html>