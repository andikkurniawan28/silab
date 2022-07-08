
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

                <div class="col-md-4">
                                
                    <h5>Nira Pemurnian <?=$i;?></h5>
                        <table class="table table-sm table-bordered table-hover">

                            <tr>
                                <th>Time</th>
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>HK</th>
                            </tr>

                            <?php foreach($nira_pemurnian[$i] as $nira_pemurnian[$i]): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($nira_pemurnian[$i]->waktu));?></td>
                                <td><?=number_format($nira_pemurnian[$i]->brix,2);?></td>
                                <td><?=number_format($nira_pemurnian[$i]->pol,2);?></td>
                                <td><?=number_format($nira_pemurnian[$i]->hk,2);?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>

            <?php endfor; ?>

            <?php for($i=0; $i < count($blotong); $i++): ?>

                <div class="col-md-4">
                                
                    <h5>Blotong <?=$i;?></h5>
                        <table class="table table-sm table-bordered table-hover">

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
    