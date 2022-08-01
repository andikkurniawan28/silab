
          <div class="container-fluid">

          <div class="row">

              <?php for($i=0; $i < count($card_title); $i++): ?>
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><?=$card_title[$i];?></h5>
                        <a href="<?=base_url($url[$i].'_control');?>" class="btn btn-primary">Enter</a>
                      </div>
                    </div>
                  <br>
                </div>
              <?php endfor; ?>

              <?php 
                if(
                    $this->session->userdata('nama') == 'Andik Kurniawan' || 
                    $this->session->userdata('nama') == 'Muslimin'
                ) : 
              ?>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Taksasi Tetes</h5>
                      <a href="<?=base_url('input_data/volume_tetes_control');?>" class="btn btn-primary">Enter</a>
                    </div>
                  </div>
                  <br>
                </div>
              <?php endif; ?>

              <?php 
                if(
                    $this->session->userdata('nama') == 'Andik Kurniawan' || 
                    $this->session->userdata('nama') == 'Muslimin' || 
                    $this->session->userdata('nama') == 'Risky Anggara' || 
                    $this->session->userdata('nama') == 'Achmad Zauzi Rifqi' || 
                    $this->session->userdata('nama') == 'M. Arvan Dwi Fatahillah' || 
                    $this->session->userdata('nama') == 'Aris Dedi Setiawan'
                ) : 
              ?>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Timbangan RS In</h5>
                      <a href="<?=base_url('input_data/timbangan_rs_in_control');?>" class="btn btn-primary">Enter</a>
                    </div>
                  </div>
                  <br>
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Timbangan RS Out</h5>
                      <a href="<?=base_url('input_data/timbangan_rs_out_control');?>" class="btn btn-primary">Enter</a>
                    </div>
                  </div>
                  <br>
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Timbangan Tetes</h5>
                      <a href="<?=base_url('input_data/timbangan_tetes_control');?>" class="btn btn-primary">Enter</a>
                    </div>
                  </div>
                  <br>
                </div>

              <?php endif; ?>

              <?php 
                if(
                    $this->session->userdata('nama') == 'Andik Kurniawan'
                ) : 
              ?>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">User</h5>
                      <a href="<?=base_url('input_data/user_control');?>" class="btn btn-primary">Enter</a>
                    </div>
                  </div>
                  <br>
                </div>
              <?php endif; ?>

              

          </div>

      </div>

    </section>
    