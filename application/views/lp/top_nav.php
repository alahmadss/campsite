<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0.815);">
      <div class="container-fluid">
        <img src="<?php echo base_url('assets/')?>img/favicon.ico" alt="" width="25" height="25" class="d-inline-block align-text-top">
        <span class="navbar-brand" href="#">Winter-<strong>Camp</strong></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('')?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#lokasi">Camp-Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url('main/booking')?>" >Booking</a>
            </li>
          </ul>
          <?php
                    if(isset($_SESSION['ses_username'])){
          ?>
                      <span class="nav-item" style="color: whitesmoke;">Hai, <?php echo $this->session->userdata('ses_username') ?> !</span>
                      &nbsp;
                      <a href="<?php echo base_url('main/logout')?>" class="btn btn-outline-primary">Logout</a>
          <?php
                   }else{
          ?>
                      <a href="<?php echo base_url('login')?>" class="btn btn-outline-primary">Login</a>&nbsp;
                        <a href="<?php echo base_url('main/daftar')?>" class="btn btn-outline-primary">Daftar</a>  
          <?php
                    }
          ?>
        </div>
      </div>
    </nav>
    