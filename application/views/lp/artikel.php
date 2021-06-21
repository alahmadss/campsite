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
    <?php $this->load->view('lp/top_nav') ?>
          <br><br>
          <br>
            <main>
            <?php
                        $count= 1;
                        foreach ($tartikel1->result() as $value) {
                        ?>
                <div class="container">
                    <div class="section-headline text-center">
                        <h1><?php echo $value->nama_spot; ?></h1>
                    </div>
                    
                    <table class="table">
                        <tr>
                            <td>
                                <img src="<?php echo base_url().$value->foto;?>" width="300" height="300"/>
                            </td>
                            <td>
                            <p align="justify"><?php echo $value->artikel; ?></p>
                            </td>
                        </tr>
                    </table>
                    <?php } ?>
                </div>
            </main>
            <?php $this->load->view('lp/footer') ?>
          <!--JavaScript-->
          <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    </body>
</html>