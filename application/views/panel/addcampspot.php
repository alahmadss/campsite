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
                    <div class="col py-3">
                        <br>
                        <br>
                        <div class="section-headline text-center">
                            <h1>Input Camping Site</h1>
                        </div>
                        <form class="needs-validation" enctype="multipart/form-data" novalidate id="form" action="<?php echo base_url('panel/campspotsimpan')?>" method="post">
                            <br>
                            <div class="p-5">
                            <div class="mb-3">
                                <label for="campSiteName" class="form-label">Nama Camping Site</label>
                                <input type="text" name="namaspot" class="form-control" id="campSiteName" aria-describedby="emailHelp" required>
                                <div id="campSiteName" class="form-text" >Isikan nama camping site.</div>
                            </div>
                            <div class="mb-3">
                                <label for="campSiteLoc" class="form-label">Lokasi Camping Site</label>
                                <input type="text" name="lokasi" class="form-control" id="campSiteLoc" aria-describedby="emailHelp" required>
                                <div id="campSiteLoc" class="form-text" >Isikan lokasi camping site.</div>
                            </div>
                            <div class="mb-3">
                              <label for="campSiteArticle" class="form-label">Artikel</label>
                              <div class="form-floating">
                                <textarea class="form-control" name="artikel" placeholder="Isi artikel disini." id="textarea" required></textarea>
                                <label for="textarea">Isikan artikel camping site</label>
                              </div>
                            </div>
                            <div class="mb-3">
                                <label for="campSitePhoto" class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control" id="campSitePhoto" required>
                            </div>
                            <br>
                            <br>
                            <div class="section-headline text-center">
                                <button type="submit" class="btn btn-outline-dark">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <!--JavaScript-->
          <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    </body>
</html>