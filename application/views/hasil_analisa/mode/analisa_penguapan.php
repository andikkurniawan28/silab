<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav><hr><br>

    <div class="row">

        <?php for($i=0; $i < count($penguapan); $i++): ?>
        <div class="col-md-4">
            <a href="<?=$url_penguapan[$i];?>"><h5><?=$sampel_penguapan[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                </tr>
                <?php foreach($penguapan[$i] as $penguapan[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($penguapan[$i]->waktu));?></td>
                    <td><?=number_format($penguapan[$i]->brix,2);?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

    </div>
    
</div>
</section>
  