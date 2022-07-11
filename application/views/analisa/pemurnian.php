
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
                            case 0 : $sampel = "Nira Mentah"; break;
                            case 1 : $sampel = "Nira Mentah Sulfitasi"; break;
                            case 2 : $sampel = "Nira Encer"; break;
                            case 3 : $sampel = "Nira Tapis"; break;
                            case 4 : $sampel = "Nira Kental"; break;
                            case 5 : $sampel = "Nira Kental Sulfitasi"; break;
                        }
                    ?>
                                
                    <h5><?=$sampel;?></h5>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                            case 0 : $sampel = "Truk Timur"; break;
                            case 1 : $sampel = "Truk Barat"; break;
                            case 2 : $sampel = "RVF 1"; break;
                            case 3 : $sampel = "RVF 2"; break;
                            case 4 : $sampel = "RVF 3"; break;
                            case 5 : $sampel = "RVF 4"; break;
                            case 6 : $sampel = "Request"; break;
                        }
                    ?>
                                
                    <h5>Blotong <?=$sampel;?></h5>
                        <table class="table table-sm table-bordered table-hover text-xs">

                            <tr>
                                <th>Time</th>
                                <th>Pol</th>
                            </tr>

                            <?php foreach($blotong[$i] as $blotong[$i]): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($blotong[$i]->waktu));?></td>
                                <td><?=number_format($blotong[$i]->Z,2);?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>

            <?php endfor; ?>

          </div>

      </div>

    </section>
    