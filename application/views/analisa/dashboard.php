
          <div class="container-fluid">

            <div class="row">

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

                </div>

                <?php for($i=0; $i < count($id_gilingan); $i++): ?>
                <!------------------------------------------------------------->

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

                </div>

                <!------------------------------------------------------------->
                <?php endfor; ?>

                <?php for($i=0; $i < count($id_ampas_gilingan); $i++): ?>
                <!------------------------------------------------------------->

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
                      <td><?=date('H:i', strtotime($ampas_gilingan[$i+2]->waktu));?></td>
                      <td><?=number_format($ampas_gilingan[$i+2]->kadar_gula,2);?></td>
                      <td><?=number_format($ampas_gilingan[$i+2]->zk,2);?></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>

                </div>

                <!------------------------------------------------------------->
                <?php endfor; ?>


                <?php for($i=0; $i < count($id_nira_pemurnian); $i++): ?>
                <!------------------------------------------------------------->

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

                </div>

                <!------------------------------------------------------------->
                <?php endfor; ?>

                <?php for($i=0; $i < count($id_blotong); $i++): ?>
                <!------------------------------------------------------------->

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

                </div>

                <!------------------------------------------------------------->
                <?php endfor; ?>


                <?php for($i=0; $i < count($id_penguapan); $i++): ?>
                <!------------------------------------------------------------->

                <div class="col-md-4">
                  
                  <h5>Evaporator <?=$i;?></h5>

                  <table class="table table-sm table-bordered table-hover">
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

                </div>

                <!------------------------------------------------------------->
                <?php endfor; ?>

            </div>

        </div>

      </section>
      