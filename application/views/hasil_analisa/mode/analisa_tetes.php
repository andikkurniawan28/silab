<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav><hr><br>

    <div class="row">

        <?php for($i=0; $i < count($tetes); $i++): ?>
        <div class="col-md-6">
            <a href="<?=$url_tetes[$i];?>"><h5><?=$sampel_tetes[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                    <th>TSAI</th>
                </tr>
                <?php foreach($tetes[$i] as $tetes[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($tetes[$i]->waktu));?></td>
                    <td><?=number_format($tetes[$i]->brix,2);?></td>
                    <td><?=number_format($tetes[$i]->pol,2);?></td>
                    <td><?=number_format($tetes[$i]->hk,2);?></td>
                    <td><?=$tetes[$i]->tsai;?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

    </div>

</div>
</section>
    