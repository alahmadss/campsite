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
                    <div class="section-headline text-center">
                        <h3>Data</h3>
                      </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Jenis data</th>
                              <th scope="col">Jumlah data</th>
                              <th scope="col">Pengolahan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Camping spot</td>
                                <td>
                                <?php
                                      if($tspot>0){
                                        echo $tspot;
                                      }else{
                                        echo "0";
                                      }
                                    ?>
                                </td>
                                <td><a href="<?php echo base_url('panel/campspotview')?>" class="btn btn-outline-primary">Pengolahan</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Booking data</td>
                                <td>
                                <?php
                                      if($tbooking>0){
                                        echo $tbooking;
                                      }else{
                                        echo "0";
                                      }
                                    ?>
                                </td>
                                <td><a href="<?php echo base_url('panel/bookingview')?>" class="btn btn-outline-primary">Pengolahan</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>User</td>
                                <td>
                                <?php
                                      if($tuser>0){
                                        echo $tuser;
                                      }else{
                                        echo "0";
                                      }
                                    ?>
                                    </td>
                                <td><a href="<?php echo base_url('panel/userview')?>" class="btn btn-outline-primary">Pengolahan</a></td>
                            </tr>
                          </tbody>
                      </table>
                </div>
            </div>
        </div>
          <!--JavaScript-->
          <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    </body>
</html>