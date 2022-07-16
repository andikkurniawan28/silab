
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

          <?php for($i=0; $i < count($masakan); $i++): ?>

            <?php switch($i)
            {
                case 0 : 
                    $sampel = "Masakan A";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_masakan[0].'/Masakan_A');
                    break;
                case 1 : 
                    $sampel = "Masakan A Raw";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_masakan[1].'/Masakan_A_Raw');
                    break;
                case 2 : 
                    $sampel = "Masakan C";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_masakan[2].'/Masakan_C');
                    break;
                case 3 : 
                    $sampel = "Masakan D";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_masakan[3].'/Masakan_D');
                    break;
                case 4 : 
                    $sampel = "Masakan R1";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_masakan[4].'/Masakan_R1');
                    break;
                case 5 : 
                    $sampel = "Masakan R2";
                    $url    = base_url('welcome/show_analisa_stroop/'.$id_masakan[5].'/Masakan_R2');
                    break;
            }?>

              <div class="col-md-4">
                              
                    <a href="<?=$url;?>"><h5><?=$sampel;?></h5></a>
                      <table class="table table-sm table-bordered table-hover text-xs">

                          <tr>
                              <th>Time</th>
                              <th>Brix</th>
                              <th>Pol</th>
                              <th>HK</th>
                              <th>IU</th>
                          </tr>

                          <?php foreach($masakan[$i] as $masakan[$i]): ?>
                          <tr>
                              <td><?=date('H:i', strtotime($masakan[$i]->waktu));?></td>
                              <td><?=number_format($masakan[$i]->brix,2);?></td>
                              <td><?=number_format($masakan[$i]->pol,2);?></td>
                              <td><?=number_format($masakan[$i]->hk,2);?></td>
                              <td><?=$masakan[$i]->IU;?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  