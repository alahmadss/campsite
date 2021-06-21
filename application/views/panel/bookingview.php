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
                        <h3>Data booking</h3>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Username</th>
                              <th scope="col">Camping spot</th>
                              <th scope="col">No KTP</th>
                              <th scope="col">Kelola Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                            $count = 0;
                                            foreach ($tbooking->result() as $value):
                                                $count++;
                                        ?>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $value->username; ?></td>
                                <td><?php echo $value->nama_spot; ?></td>
                                <td><?php echo $value->no_ktp; ?></td>
                                <td>
                                    <a href="<?php echo base_url('panel/editbooking/').$value->id_booking?>" class="btn btn-outline-primary">Edit</a>
                                    <a href="<?php echo base_url('panel/deletebooking/').$value->id_booking?>" class="btn btn-outline-primary">Hapus</a>
                                </td>
                            </tr>
                            <?php 
                                endforeach;
                            ?>
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