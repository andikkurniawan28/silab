
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

          <?php for($i=0; $i < count($rs); $i++): ?>

            <?php switch($i)
            {
                case 0 :
                    $sampel = "Raw Sugar Kedatangan";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_rs[0].'/Raw_Sugar_Kedatangan');
                    break;
                case 1 :
                    $sampel = "Raw Sugar Silo";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_rs[1].'/Raw_Sugar_Silo');
                    break;
            }
            ?>

              <div class="col-md-6">
                              
                    <a href="<?=$url;?>"><h5><?=$sampel;?></h5></a>
                      <table class="table table-sm table-bordered table-hover text-xs">

                          <tr>
                              <th>Time</th>
                              <th>IU</th>
                              <th>Air</th>
                              <th>Brix</th>
                              <th>Pol</th>
                              <th>HK</th>
                              <th>SO<sub>2</sub></th>
                              <th>SD</th>
                          </tr>

                          <?php foreach($rs[$i] as $rs[$i]): ?>
                          <tr>
                                <td><?=date('H:i', strtotime($rs[$i]->waktu));?></td>
                                <td><?=number_format($rs[$i]->IU);?></td>
                                <td><?=$rs[$i]->kadar_air;?></td>
                                <td><?=number_format($brix = 100-$rs[$i]->kadar_air,2);?></td>
                                <td><?=number_format($pol = ($rs[$i]->hk * $brix) / 100,2);?></td>
                                <td><?=$rs[$i]->hk;?></td>
                                <td><?=$rs[$i]->so2;?></td>
                                <td><?=$rs[$i]->bjb;?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  