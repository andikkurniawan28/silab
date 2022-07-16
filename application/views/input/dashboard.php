
          <div class="container-fluid">

          <div class="row">

              <?php for($i=0; $i < count($card_title); $i++): ?>
      
              <div class="col-md-3">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?=ucfirst($card_title[$i]);?></h5>
                    <a href="<?=base_url($url[$i].'_control');?>" class="btn btn-primary">Enter</a>
                  </div>
                </div>

                <br>

              </div>

              <?php endfor; ?>

          </div>

      </div>

    </section>
    