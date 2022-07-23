<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav><hr><br>

    <div class="row">

        <?php for($i=0; $i < count($masakan); $i++): ?>
        <div class="col-md-6">
            <a href="<?=$url_masakan[$i];?>"><h5><?=$sampel_masakan[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                    <th>IU</th>
                </tr>
                <?php foreach($masakan[$i] as $masakan[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($masakan[$i]->waktu));?></td>
                    <td><?=number_format($masakan[$i]->brix,2);?></td>
                    <td><?=number_format($masakan[$i]->pol,2);?></td>
                    <td><?=number_format($masakan[$i]->hk,2);?></td>
                    <td><?=$masakan[$i]->IU;?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

    </div>

</div>
</section>
    