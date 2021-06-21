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
    <style type="text/css">
      .preloader{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
      }
      .preloader .loading{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }
    </style>
  </head>
  <body>
    <audio hidden autoplay loop>
      <source src="<?php echo base_url('assets/audios/01-lifelike.mp3')?>" type="audio/mpeg">
    </audio>
    <div class="preloader">
      <div class="loading">
        <img src="<?php echo base_url('assets/img/nurture.gif')?>" width="80">
        <h6>Mohon tunggu</h6>
      </div>
    </div>
    <?php $this->load->view('lp/top_nav') ?>
    <div class="fluid">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/MotosuLake.jpg')?>" class="d-block w-100" height="650" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Motosu Lake</h5>
              <p>Yuru Camp: Netflix Adaptation.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/SahaleGlacier.jpg')?>" class="d-block w-100" height="650" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sahale Glacier Camp</h5>
              <p>We Will Rock You!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/HossaNational.jpg')?>" class="d-block w-100" height="650" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hossa National Park</h5>
              <p>Freeze, breeze.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <br><br>
    <div id="lokasi">  
      <main>
        <div class="container">
          <div class="section-headline text-center">
            <h1>Yuk lihat lokasi Camping yang tersedia!</h1>
          </div>
          <br>
          <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Lokasi Spot</th>
                              <th scope="col">Artikel</th>
                              <th scope="col">Booking</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                            $count = 0;
                                            foreach ($tcamp->result() as $value):
                                                $count++;
                                        ?>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $value->nama_spot; ?></td>
                                <td><?php echo $value->lokasi; ?></td>
                                <td><a href="<?php echo base_url('artikel/tampilartikel/'.$value->id_spot); ?>" class="btn btn-outline-primary">Artikel</a></td>
                                <td>
                                    
                                    <a href="<?php echo base_url('main/booking')?>" class="btn btn-outline-primary">Booking</a>
                                </td>
                            </tr>
                            <?php 
                                endforeach;
                            ?>
                        </tbody>
                    </table>
        </div>
      </main>
    </div>
    <?php $this->load->view('lp/footer') ?>
    <!--JavaScript-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.js')?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $(".preloader").fadeOut(2500);
      });
    </script>
  </body>
</html>