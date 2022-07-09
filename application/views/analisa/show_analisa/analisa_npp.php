

    <div class="container-fluid">

        <p align="right">
            <a class="btn btn-sm btn-warning" href="<?=base_url('welcome/download_analisa/0/npp/1');?>">Download Excel</a>
        </p>

        <div class="row">

              <div class="col-md-12">

                    <?php 
                        if($status == 1)
                        {
                            header("Content-type: application/vnd-ms-excel");
                            header("Content-Disposition: attachment; filename=SILAB_Download.xls");
                        }
                    ?>

                    <table class="table table-sm table-bordered table-hover text-xs">
                          <tr>
                              <th>#</th>
                              <th>Time</th>
                              <th>Brix</th>
                              <th>Pol</th>
                              <th>Rendemen</th>
                          </tr>

                          <?php foreach($hasil_analisa as $hasil_analisa): ?>
                          <tr>
                              <td><?=$hasil_analisa->id;?></td>
                              <td><?=$hasil_analisa->time;?></td>
                              <td><?=number_format($hasil_analisa->brix,2);?></td>
                              <td><?=number_format($hasil_analisa->pol,2);?></td>
                              <td><?=number_format($hasil_analisa->rendemen,2);?></td>
                          </tr>
                          <?php endforeach; ?>

                      </table>

              </div>

        </div>

    </div>

  </section>

  