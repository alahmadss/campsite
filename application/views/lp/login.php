<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="<?php echo base_url('assets/')?>img/favicon.ico" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <title>
            Winter-Camp | Your Camping Partner.
          </title>
        <style>
            body{
                background-image: url(<?php echo base_url('assets/img/bg.png')?>);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="section-headline text-center" style="color: whitesmoke;">
                <h1>Winter-<strong>Camp</strong></h1>
              </div>
            <br>
            <div class="section-headline">
                <center>
                <table class="border border-2 border-light" style="background-color: rgba(255, 255, 255, 0.466);">
                    <tr>
                        <td>
                            <form action="<?php echo base_url('login/autentikasi_user')?>" method="post">
                                <br>
                                <div class="section-headline text-center">
                                    <h3>Login</h3>
                                    <!-- <hr width="50%"> -->
                                  </div>
                                  
                                <div class="p-5">
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Isikan username anda.</div>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <a href="<?php echo base_url('main/daftar')?>" style="text-decoration: none; color:rgb(19, 0, 187);">Belum mempunyai akun? daftar.</a>
                                &nbsp;&nbsp;
                                &nbsp;&nbsp;
                                &nbsp;&nbsp;
                                &nbsp;&nbsp;
                                <a href="<?php echo base_url('')?>" style="text-decoration: none; color:rgb(19, 0, 187);">Kembali ke website</a>
                                <br>
                                <br>
                                <div class="section-headline text-center">
                                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                                  </div>
                                
                                </div>
                            </form>
                        </td>
                    </tr>
                    
                </table>
            </center>
            </div>
        </div>
          <!--JavaScript-->
          <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    </body>
</html>