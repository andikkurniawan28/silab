
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

            <?php for($i=0; $i < count($nira_pemurnian); $i++): ?>

                <div class="col-md-6">

                    <?php switch($i)
                        {
                            case 0 : 
                                $sampel = "Nira Mentah"; 
                                $url    = base_url('welcome/show_analisa_pemurnian/'.$id_nira_pemurnian[0].'/Nira_Mentah');
                                break;
                            case 1 : 
                                $sampel = "Nira Mentah Sulfitasi";
                                $url    = base_url('welcome/show_analisa_pemurnian/'.$id_nira_pemurnian[1].'/Nira_Mentah_Sulfitasi');
                                break;
                            case 2 : 
                                $sampel = "Nira Encer"; 
                                $url    = base_url('welcome/show_analisa_pemurnian/'.$id_nira_pemurnian[2].'/Nira_Encer');
                                break;
                            case 3 : 
                                $sampel = "Nira Tapis";
                                $url    = base_url('welcome/show_analisa_pemurnian/'.$id_nira_pemurnian[3].'/Nira_Tapis');
                                break;
                            case 4 : 
                                $sampel = "Nira Kental"; 
                                $url    = base_url('welcome/show_analisa_pemurnian/'.$id_nira_pemurnian[4].'/Nira_Kental');
                                break;
                            case 5 : 
                                $sampel = "Nira Kental Sulfitasi"; 
                                $url    = base_url('welcome/show_analisa_pemurnian/'.$id_nira_pemurnian[5].'/Nira_Kental_Sulfitasi');
                                break;
                        }
                    ?>
                                
                    <a href="<?=$url;?>"><h5><?=$sampel;?></h5></a>
                        <table class="table table-sm table-bordered table-hover text-xs">

                            <tr>
                                <th>Time</th>
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>HK</th>
                                <th>IU</th>
                                <th>CaO</th>
                                <th>pH</th>
                                <th>Turb</th>
                            </tr>

                            <?php foreach($nira_pemurnian[$i] as $nira_pemurnian[$i]): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($nira_pemurnian[$i]->waktu));?></td>
                                <td><?=number_format($nira_pemurnian[$i]->brix,2);?></td>
                                <td><?=number_format($nira_pemurnian[$i]->pol,2);?></td>
                                <td><?=number_format($nira_pemurnian[$i]->hk,2);?></td>
                                <td><?=$nira_pemurnian[$i]->IU;?></td>
                                <td><?=$nira_pemurnian[$i]->cao;?></td>
                                <td><?=$nira_pemurnian[$i]->ph;?></td>
                                <td><?=$nira_pemurnian[$i]->tur;?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>

            <?php endfor; ?>

            <?php for($i=0; $i < count($blotong); $i++): ?>

                <div class="col-md-4">

                    <?php switch($i)
                        {
                            case 0 : 
                                $sampel = "Truk Timur";
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[0].'/Blotong_Truk_Timur');
                                break;
                            case 1 : 
                                $sampel = "Truk Barat";
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[1].'/Blotong_Truk_Barat');
                                break;
                            case 2 : 
                                $sampel = "RVF 1";
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[2].'/Blotong_RVF1');
                                break;
                            case 3 : 
                                $sampel = "RVF 2"; 
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[3].'/Blotong_RVF2');
                                break;
                            case 4 : 
                                $sampel = "RVF 3";
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[4].'/Blotong_RVF3');
                                break;
                            case 5 : 
                                $sampel = "RVF 4"; 
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[5].'/Blotong_RVF4');
                                break;
                            case 6 : 
                                $sampel = "Request";
                                $url    = base_url('welcome/show_analisa_blotong/'.$id_blotong[6].'/Blotong_Request');
                                break;
                        }
                    ?>
                                
                    <a href="<?=$url;?>"><h5>Blotong <?=$sampel;?></h5></a>
                        <table class="table table-sm table-bordered table-hover text-xs">

                            <tr>
                                <th>Time</th>
                                <th>Pol</th>
                                <th>Air</th>
                            </tr>

                            <?php foreach($blotong[$i] as $blotong[$i]): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($blotong[$i]->waktu));?></td>
                                <td><?=number_format($blotong[$i]->Z,2);?></td>
                                <td><?=$blotong[$i]->kadar_air?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>

            <?php endfor; ?>

          </div>

      </div>

    </section>
    