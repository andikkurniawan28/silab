<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav><hr><br>

    <div class="row">

        <?php for($i=0; $i < count($stroop); $i++): ?>
        <div class="col-md-6">
            <a href="<?=$url_stroop[$i];?>"><h5><?=$sampel_stroop[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                    <th>IU</th>
                </tr>
                <?php foreach($stroop[$i] as $stroop[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($stroop[$i]->waktu));?></td>
                    <td><?=number_format($stroop[$i]->brix,2);?></td>
                    <td><?=number_format($stroop[$i]->pol,2);?></td>
                    <td><?=number_format($stroop[$i]->hk,2);?></td>
                    <td><?=$stroop[$i]->IU;?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

    </div>

</div>
</section>
    