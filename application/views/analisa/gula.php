
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

            <?php switch($i)
            {
                case 0 :
                    $sampel = "Gula R1";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[0].'/Gula_R1');
                    break;
                case 1 :
                    $sampel = "Gula R2";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[1].'/Gula_R2');
                    break;
                case 2 :
                    $sampel = "Gula A Raw";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[2].'/Gula_A_Raw');
                    break;
                case 3 :
                    $sampel = "Gula RS";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[3].'/Gula_RS');
                    break;
                case 4 :
                    $sampel = "Gula C";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[4].'/Gula_C');
                    break;
                case 5 :
                    $sampel = "Gula D1";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[5].'/Gula_D1');
                    break;
                case 6 :
                    $sampel = "Gula D2";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[6].'/Gula_D2');
                    break;
                case 7 :
                    $sampel = "Gula SHS";
                    $url    = base_url('welcome/show_analisa_gula/'.$id_gula[7].'/Gula_SHS');
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

                          <?php foreach($gula[$i] as $gula[$i]): ?>
                          <tr>
                                <td><?=date('H:i', strtotime($gula[$i]->waktu));?></td>
                                <td><?=number_format($gula[$i]->IU);?></td>
                                <td><?=$gula[$i]->kadar_air;?></td>
                                <td><?=number_format($brix = 100-$gula[$i]->kadar_air,2);?></td>
                                <td><?=number_format($pol = ($gula[$i]->hk * $brix) / 100,2);?></td>
                                <td><?=$gula[$i]->hk;?></td>
                                <td><?=$gula[$i]->so2;?></td>
                                <td><?=$gula[$i]->bjb;?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  