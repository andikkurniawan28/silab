
          <div class="container-fluid">

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

          </div>

      </div>

    </section>
    