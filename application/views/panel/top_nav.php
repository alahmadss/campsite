<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                  <img src="<?php echo base_url('assets/')?>img/favicon.ico" alt="" width="25" height="25" class="d-inline-block align-text-top">
                  <a class="navbar-brand" href="#">Winter-<strong>Camp</strong></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    </ul>
                        <span class="nav-item" style="color: whitesmoke;">Selamat datang, <?php echo $this->session->userdata('ses_username') ?></span>
                        &nbsp;
                      <a href="<?php echo base_url('login/logout')?>" class="btn btn-outline-primary">Logout</a>
                  </div>
                </div>
              </nav>