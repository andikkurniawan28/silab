

<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=NPP_data.xls");
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

          

