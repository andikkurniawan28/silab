
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

              <div class="col-md-12">
                              
                    <h5>Analisa Ketel</h5>
                        <table class="table table-sm table-bordered table-hover text-xs">

                            <tr>
                                <th rowspan="2">Time</th>
                                <th colspan="4">JJ</th>
                                <th colspan="4">Yosh1</th>
                                <th colspan="4">Yosh2</th>
                                <!-- <th colspan="2">Daert JJ</th>
                                <th colspan="2">Daert Yosh</th>
                                <th colspan="2">WTP</th>
                                <th colspan="2">HW</th> -->
                            </tr>
                            <tr>
                                <th>Hardness</th>
                                <th>pH</th>
                                <th>TDS</th>
                                <th>Phospat</th>
                                <th>Hardness</th>
                                <th>pH</th>
                                <th>TDS</th>
                                <th>Phospat</th>
                                <th>Hardness</th>
                                <th>pH</th>
                                <th>TDS</th>
                                <th>Phospat</th>
                                <!-- <th>pH</th>
                                <th>TDS</th>
                                <th>pH</th>
                                <th>TDS</th>
                                <th>pH</th>
                                <th>TDS</th>
                                <th>pH</th>
                                <th>TDS</th> -->
                            </tr>

                            <?php foreach($ketel as $ketel): ?>
                            <tr>
                                <td><?=$ketel->waktu;?></td>
                                <td><?=number_format($ketel->sadah_jj,2);?>
                                <td><?=number_format($ketel->ph_jj,2);?>
                                <td><?=number_format($ketel->tds_jj,2);?>
                                <td><?=number_format($ketel->phospat_jj,2);?>
                                <td><?=number_format($ketel->sadah_y1,2);?>
                                <td><?=number_format($ketel->ph_y1,2);?>
                                <td><?=number_format($ketel->tds_y1,2);?>
                                <td><?=number_format($ketel->phospat_y1,2);?>
                                <td><?=number_format($ketel->sadah_y2,2);?>
                                <td><?=number_format($ketel->ph_y2,2);?>
                                <td><?=number_format($ketel->tds_y2,2);?>
                                <td><?=number_format($ketel->phospat_y2,2);?>
                                <!-- <td><?=number_format($ketel->ph_djj,2);?>
                                <td><?=number_format($ketel->tds_djj,2);?>
                                <td><?=number_format($ketel->ph_dy,2);?>
                                <td><?=number_format($ketel->tds_dy,2);?>
                                <td><?=number_format($ketel->ph_wtp,2);?>
                                <td><?=number_format($ketel->tds_wtp,2);?>
                                <td><?=number_format($ketel->ph_hw,2);?>
                                <td><?=number_format($ketel->tds_hw,2);?> -->
                            </tr>
                            <?php endforeach; ?>

                        </table>

              </div>

        </div>

    </div>

  </section>
  