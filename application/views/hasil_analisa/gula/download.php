<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Gula_in_proses_data.xls");
?>
<table class="table table-sm table-bordered table-hover text-xs">
    <tr>
        <th>#</th>
        <th>Time</th>
        <th>ICUMSA</th>
        <th>Air</th>
        <th>Brix</th>
        <th>Pol</th>
        <th>HK</th>
        <th>SO2</th>
    </tr>

    <?php foreach($hasil_analisa as $hasil_analisa): ?>
    <tr>
        <td><?=$hasil_analisa->bahan;?></td>
        <td><?=$hasil_analisa->waktu;?></td>
        <td><?=$hasil_analisa->IU;?></td>
        <td><?=$hasil_analisa->kadar_air;?></td>
        <td><?=number_format($brix = 100-$hasil_analisa->kadar_air,2);?></td>
        <td><?=number_format($pol = ($hasil_analisa->hk * $brix) / 100,2);?></td>
        <td><?=$hasil_analisa->hk;?></td>
        <td><?=$hasil_analisa->so2;?></td>
    </tr>
    <?php endforeach; ?>
</table>

      

