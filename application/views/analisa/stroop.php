
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

          <?php for($i=0; $i < count($stroop); $i++): ?>

              <div class="col-md-4">
                              
                  <h5>Stroop <?=$i;?></h5>
                      <table class="table table-sm table-bordered table-hover">

                          <tr>
                              <th>Time</th>
                              <th>Brix</th>
                              <th>Pol</th>
                              <th>HK</th>
                          </tr>

                          <?php foreach($stroop[$i] as $stroop[$i]): ?>
                          <tr>
                              <td><?=date('H:i', strtotime($stroop[$i]->waktu));?></td>
                              <td><?=number_format($stroop[$i]->brix,2);?></td>
                              <td><?=number_format($stroop[$i]->pol,2);?></td>
                              <td><?=number_format($stroop[$i]->hk,2);?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  