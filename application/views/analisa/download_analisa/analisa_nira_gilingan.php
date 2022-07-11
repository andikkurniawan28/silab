

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Silab_File.xls");
?>
                    <table class="table table-sm table-bordered table-hover text-xs">
                      <tr>
                          <th>#</th>
                          <th>Time</th>
                          <th>Brix</th>
                          <th>Pol</th>
                          <th>HK</th>
                      </tr>

                      <?php foreach($hasil_analisa as $hasil_analisa): ?>
                      <tr>
                          <td><?=$hasil_analisa->id;?></td>
                          <td><?=$hasil_analisa->waktu;?></td>
                          <td><?=number_format($hasil_analisa->brix,2);?></td>
                          <td><?=number_format($hasil_analisa->pol,2);?></td>
                          <td><?=number_format($hasil_analisa->hk,2);?></td>
                      </tr>
                      <?php endforeach; ?>

                  </table>

      

