
          <div class="container-fluid">

          <div class="row">



            <!--------- It's a PHP --------------------------------->
            <?php if($page_title = "gilingan") : ?>

                <div class="col-md-4">
                
                    <h5>NPP</h5>

                        <table class="table table-sm table-bordered table-hover">
                            <tr>
                                <th>Time</th>
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>Rendemen</th>
                            </tr>

                            <?php foreach($npp as $npp): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($npp->time));?></td>
                                <td><?=number_format($npp->brix,2);?></td>
                                <td><?=number_format($npp->pol,2);?></td>
                                <td><?=number_format($npp->rendemen,2);?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>

                <?php for($i=0; $i < count($nira_gilingan); $i++): ?>
                <div class="col-md-4">
                                
                    <h5>Nira Gilingan <?=$i+2;?></h5>
                        <table class="table table-sm table-bordered table-hover">

                            <tr>
                                <th>Time</th>
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>HK</th>
                            </tr>

                            <?php foreach($nira_gilingan[$i+2] as $nira_gilingan[$i+2]): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($nira_gilingan[$i+2]->waktu));?></td>
                                <td><?=number_format($nira_gilingan[$i+2]->brix,2);?></td>
                                <td><?=number_format($nira_gilingan[$i+2]->pol,2);?></td>
                                <td><?=number_format($nira_gilingan[$i+2]->hk,2);?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>
                <?php endfor; ?>

                <?php for($i=0; $i < count($ampas_gilingan); $i++): ?>
                <div class="col-md-4">
                                
                    <h5>Ampas Gilingan <?=$i+1;?></h5>
                        <table class="table table-sm table-bordered table-hover">

                            <tr>
                                <th>Time</th>
                                <th>Pol</th>
                                <th>ZK</th>
                            </tr>

                            <?php foreach($ampas_gilingan[$i+1] as $ampas_gilingan[$i+1]): ?>
                            <tr>
                                <td><?=date('H:i', strtotime($ampas_gilingan[$i+1]->waktu));?></td>
                                <td><?=number_format($ampas_gilingan[$i+1]->kadar_gula,2);?></td>
                                <td><?=number_format($ampas_gilingan[$i+1]->zk,2);?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    <br>

                </div>
                <?php endfor; ?>

            <?php endif; ?>
            <!--------- It's a PHP --------------------------------->



          </div>

      </div>

    </section>
    