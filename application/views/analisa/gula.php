
          <div class="container-fluid">

          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('welcome/analisa');?>">Analisa</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
              </ol>
          </nav>
          <hr><br>

        <div class="row">

          <?php for($i=0; $i < count($gula); $i++): ?>

              <div class="col-md-4">
                              
                  <h5>Gula <?=$i;?></h5>
                      <table class="table table-sm table-bordered table-hover">

                          <tr>
                              <th>Time</th>
                              <th>IU</th>
                          </tr>

                          <?php foreach($gula[$i] as $gula[$i]): ?>
                          <tr>
                              <td><?=date('H:i', strtotime($gula[$i]->waktu));?></td>
                              <td><?=number_format($gula[$i]->IU);?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  