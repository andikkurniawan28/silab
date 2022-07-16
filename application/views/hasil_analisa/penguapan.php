
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

          <?php for($i=0; $i < count($penguapan); $i++): ?>

            <?php switch($i)
            {
                case 0 : 
                    $sampel = "Pre Evaporator";
                    $url    = base_url('welcome/show_analisa_penguapan/'.$id_penguapan[0].'/Pre_Evaporator');
                    break;
                case 1 : 
                    $sampel = "Evaporator 1";
                    $url    = base_url('welcome/show_analisa_penguapan/'.$id_penguapan[1].'/Evaporator_1');
                    break;
                case 2 : 
                    $sampel = "Evaporator 2";
                    $url    = base_url('welcome/show_analisa_penguapan/'.$id_penguapan[2].'/Evaporator_2');
                    break;
                case 3 : 
                    $sampel = "Evaporator 3";
                    $url    = base_url('welcome/show_analisa_penguapan/'.$id_penguapan[3].'/Evaporator_3');
                    break;
                case 4 : 
                    $sampel = "Evaporator 4";
                    $url    = base_url('welcome/show_analisa_penguapan/'.$id_penguapan[4].'/Evaporator_4');
                    break;
                case 5 : 
                    $sampel = "Evaporator 5";
                    $url    = base_url('welcome/show_analisa_penguapan/'.$id_penguapan[5].'/Evaporator_5');
                    break;
            }
            ?>

              <div class="col-md-4">
                              
                    <a href="<?=$url;?>"><h5><?=$sampel;?></h5></a>
                      <table class="table table-sm table-bordered table-hover text-xs">

                          <tr>
                              <th>Time</th>
                              <th>Brix</th>
                          </tr>

                          <?php foreach($penguapan[$i] as $penguapan[$i]): ?>
                          <tr>
                              <td><?=date('H:i', strtotime($penguapan[$i]->waktu));?></td>
                              <td><?=number_format($penguapan[$i]->brix,2);?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  