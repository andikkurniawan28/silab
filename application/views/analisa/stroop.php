
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

            <?php switch($i)
            {
                case 0 :
                    $sampel = "Klare RS";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[0].'/Klare_RS');
                    break;
                case 1 :
                    $sampel = "R1 Mol";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[0].'/R1_Mol');
                    break;
                case 2 :
                    $sampel = "R2 Mol";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[0].'/R2_Mol');
                    break;
                case 3 :
                    $sampel = "Remelter A";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[3].'/Remelter_A');
                    break;
                case 4 :
                    $sampel = "Remelter C/D";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[4].'/Remelter_CD');
                    break;
                case 5 :
                    $sampel = "Stroop A";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[5].'/Stroop_A');
                    break;
                case 6 :
                    $sampel = "Stroop C";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[6].'/Stroop_C');
                    break;
                case 7 :
                    $sampel = "Klare D";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[7].'/Klare_D');
                    break;
                case 8 :
                    $sampel = "Klare SHS";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[8].'/Klare_SHS');
                    break;
                case 9 :
                    $sampel = "Tetes";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_stroop[9].'/Tetes');
                    break;
            }
            ?>

              <div class="col-md-4">
                              
                    <a href="<?=$url;?>"><h5><?=$sampel;?></h5></a>
                      <table class="table table-sm table-bordered table-hover">

                          <tr>
                              <th>Time</th>
                              <th>Brix</th>
                              <th>Pol</th>
                              <th>HK</th>
                              <th>IU</th>
                          </tr>

                          <?php foreach($stroop[$i] as $stroop[$i]): ?>
                          <tr>
                              <td><?=date('H:i', strtotime($stroop[$i]->waktu));?></td>
                              <td><?=number_format($stroop[$i]->brix,2);?></td>
                              <td><?=number_format($stroop[$i]->pol,2);?></td>
                              <td><?=number_format($stroop[$i]->hk,2);?></td>
                              <td><?=$stroop[$i]->IU;?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  