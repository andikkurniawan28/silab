
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

          <?php for($i=0; $i < count($tetes); $i++): ?>

            <?php switch($i)
            {
                case 0 : 
                    $sampel = "Tangki 1";
                    $url    = base_url('welcome/show_analisa_tetes/'.$id_tetes[0].'/Tangki1');
                    break;
                case 1 : 
                    $sampel = "Tangki 2";
                    $url    = base_url('welcome/show_analisa_tetes/'.$id_tetes[1].'/Tangki2');
                    break;
                case 2 : 
                    $sampel = "Tangki 3";
                    $url    = base_url('welcome/show_analisa_tetes/'.$id_tetes[2].'/Tangki3');
                    break;
                case 3 : 
                    $sampel = "Kumpulan";
                    $url    = base_url('welcome/show_analisa_tetes/'.$id_tetes[3].'/Kumpulan');
                    break;
                case 4 : 
                    $sampel = "Tandon";
                    $url    = base_url('welcome/show_analisa_tetes/'.$id_tetes[4].'/Tandon');
                    break;
            }
            ?>

              <div class="col-md-4">
                              
                    <a href="<?=$url;?>"><h5>Tetes <?=$sampel;?></h5></a>
                      <table class="table table-sm table-bordered table-hover text-xs">

                          <tr>
                              <th>Time</th>
                              <th>Brix</th>
                              <th>TSAI</th>
                          </tr>

                          <?php foreach($tetes[$i] as $tetes[$i]): ?>
                          <tr>
                              <td><?=date('H:i', strtotime($tetes[$i]->waktu));?></td>
                              <td><?=number_format($tetes[$i]->brix,2);?></td>
                              <td><?=$tetes[$i]->tsai;?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>
                  <br>

              </div>

          <?php endfor; ?>

        </div>

    </div>

  </section>
  