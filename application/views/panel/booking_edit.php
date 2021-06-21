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
                        <h3>Edit Booking</h3>
                    </div>
                    <form class="needs-validation" novalidate id="form" action="<?php echo base_url('panel/updatebooking')?>" method="post">
                        <div class="p-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="hidden" name="hiddenbooking" value="<?php echo $bookingedit->id_booking; ?>">
                            <input type="text" name="username" value="<?php echo $bookingedit->username; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="usernameh" class="form-text" >Isikan username anda.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama spot</label>
                            <br>
                            <select class="form-select" name="namaspot" aria-label="Default select example" required>
                              <option selected>Pilih spot camping</option>
                              
                                                <?php
                                                    $n = 0;
                                                    foreach ($tcamp->result() as $key):
                                                        $n++;
                                                ?>
                                                <option value="<?php echo $key->nama_spot; ?>"><?php echo $key->nama_spot; ?></option>
                                                <?php 
                                                    endforeach;
                                                ?>
                            </select>
                            <div id="nmspth" class="form-text">Pilih spot camping.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor KTP</label>
                            <input type="text" name="noktp" value="<?php echo $bookingedit->no_ktp; ?>" class="form-control" id="exampleInputPassword1" required>
                            <div id="nmrktph" class="form-text">Isikan nomor KTP anda.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Alamat</label>
                          <div class="form-floating">
                            <textarea class="form-control" name="alamat" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                            <label for="floatingTextarea">Isikan alamat anda</label>
                          </div>
                      </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                            <input type="text" name="notelp" value="<?php echo $bookingedit->no_telp; ?>" class="form-control" id="exampleInputPassword1" required>
                            <div id="nmrktph" class="form-text">Isikan nomor telepon anda.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Tanggal check in</label>
                          <input type="date" name="tglin" value="<?php echo $bookingedit->tgl_check_in; ?>" class="form-control" id="exampleInputPassword1" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal check out</label>
                        <input type="date" name="tglout" value="<?php echo $bookingedit->tgl_check_out; ?>" class="form-control" id="exampleInputPassword1" required>
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
          <!--JavaScript-->
          <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    </body>
</html>
