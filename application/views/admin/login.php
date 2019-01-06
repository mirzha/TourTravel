 <html> 
  <head> 
    <title>Login Admin</title> 
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/style1.css"> 
  </head> 

  <body>
   <style type="text/css">
      body
      {
          background-image: url("<?php echo base_url();?>assets/images/bg-body.jpg");
          background-size: 100%;
      }
    </style> 
   
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <?php echo form_open('login/login_process') ?>
            <img src="<?php echo base_url(); ?>assets/images/doland.jpg"> <br /><br /> 
        

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br />
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br /> 


              <input type="Submit" name="login" value="LOGIN" class="tombol_login"> 
            </form> 

        </div> 

      </div> 

      <div class="copyright"> 
     <!--  <p style="color:#fff"> -->
      <center>
        CopyRight&copy 2017 | Design By: WaZha Software House </a> | City : Malang. 
        </center>
        </p>
      </div> 
    </div> 
  </body> 
</html>