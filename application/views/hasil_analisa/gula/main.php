<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('home/show_hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav>
    <hr>

    <div class="row">
        <?php for($i = 0; $i < count($id); $i++) : ?>
        <div class="col-md-6">
            <a href="<?=$url[$i];?>"><h5><?=$sampel[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>IU</th>
                    <th>Air</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                    <th>SO<sub>2</sub></th>
                    <th>SD</th>
                </tr>
                <?php foreach($hasil_analisa[$i] as $hasil_analisa[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($hasil_analisa[$i]->waktu));?></td>
                    <td><?=number_format($hasil_analisa[$i]->IU);?></td>
                    <td><?=$hasil_analisa[$i]->kadar_air;?></td>
                    <td><?=number_format($brix = 100-$hasil_analisa[$i]->kadar_air,2);?></td>
                    <td><?=number_format($pol = ($hasil_analisa[$i]->hk * $brix) / 100,2);?></td>
                    <td><?=$hasil_analisa[$i]->hk;?></td>
                    <td><?=$hasil_analisa[$i]->so2;?></td>
                    <td><?=$hasil_analisa[$i]->bjb;?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
        </div>
        <?php endfor; ?>
    </div>

</div>
</section>
  