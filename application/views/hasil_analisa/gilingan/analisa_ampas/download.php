

<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Ampas_gilingan_data.xls");
?>
<table class="table table-sm table-bordered table-hover text-xs">
    <tr>
        <th>#</th>
        <th>Time</th>
        <th>Pol</th>
        <th>ZK</th>
    </tr>
    <?php foreach($hasil_analisa as $hasil_analisa): ?>
    <tr>
        <td><?=$hasil_analisa->bahan;?></td>
        <td><?=$hasil_analisa->waktu;?></td>
        <td><?=number_format($hasil_analisa->pol_koreksi,2);?></td>
        <td><?=number_format($hasil_analisa->zk,2);?></td>
    </tr>
    <?php endforeach; ?>
</table>

      

