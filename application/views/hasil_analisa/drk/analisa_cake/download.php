

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Silab_File.xls");
?>
<table class="table table-sm table-bordered table-hover text-xs">
<tr>
    <th>#</th>
    <th>Time</th>
    <th>Pol</th>
    <th>Kadar Air</th>
</tr>

<?php foreach($hasil_analisa as $hasil_analisa): ?>
<tr>
    <td><?=$hasil_analisa->bahan;?></td>
    <td><?=$hasil_analisa->waktu;?></td>
    <td><?=$hasil_analisa->Z;?></td>
    <td><?=$hasil_analisa->kadar_air;?></td>
</tr>
<?php endforeach; ?>

</table>

      

