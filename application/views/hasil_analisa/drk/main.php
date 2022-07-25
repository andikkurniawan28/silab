<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('home/show_hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav><hr>

    <div class="row">

        <?php for($i=0; $i < count($drk); $i++): ?>
        <div class="col-md-6">
            <a href="<?=$url_drk[$i];?>"><h5><?=$sampel_drk[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                    <th>IU</th>
                    <th>CaO</th>
                    <th>pH</th>
                    <th>Turb</th>
                </tr>
                <?php foreach($drk[$i] as $drk[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($drk[$i]->waktu));?></td>
                    <td><?=number_format($drk[$i]->brix,2);?></td>
                    <td><?=number_format($drk[$i]->pol,2);?></td>
                    <td><?=number_format($drk[$i]->hk,2);?></td>
                    <td><?=$drk[$i]->IU;?></td>
                    <td><?=$drk[$i]->cao;?></td>
                    <td><?=$drk[$i]->ph;?></td>
                    <td><?=$drk[$i]->tur;?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

        <?php for($i=0; $i < count($cake); $i++): ?>
        <div class="col-md-4">
            <a href="<?=$url_cake[$i];?>"><h5><?=$sampel_cake[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Pol</th>
                    <th>Air</th>
                </tr>
                <?php foreach($cake[$i] as $cake[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($cake[$i]->waktu));?></td>
                    <td><?=number_format($cake[$i]->Z,2);?></td>
                    <td><?=$cake[$i]->kadar_air?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

    </div>

</div>
</section>
    