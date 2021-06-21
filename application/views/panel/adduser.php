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
    </head>
    <body>
        
          <div class="container-fluid">
          <?php $this->load->view('panel/top_nav') ?>
            <div class="row flex-nowrap">
            <?php $this->load->view('panel/sidebar') ?>
                <div class="col py-3">
                    <br>
                    <br>
                    <table class="table table-striped table-hover">
                        <form action="<?php echo base_url('panel/usersimpan')?>" method="post">
                            <br>
                            <div class="section-headline text-center">
                                <h3>Daftar</h3>
                                <!-- <hr width="50%"> -->
                            </div>

                            <div class="p-5">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Isikan username anda.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Isikan email anda.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" id="level0" name="level" value="0">
                                    <label for="level0"> Level 0</label><br>
                                    <input type="checkbox" id="level1" name="level" value="1">
                                    <label for="level1"> Level 1</label>
                                </div>
                                <br>
                                <br>
                                <div class="section-headline text-center">
                                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
          <!--JavaScript-->
          <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    </body>
</html>