<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        </ol>
    </nav><hr><br>

    <div class="row">

        <?php for($i=0; $i < count($nira_pemurnian); $i++): ?>
        <div class="col-md-6">
            <a href="<?=$url_nira_pemurnian[$i];?>"><h5><?=$sampel_pemurnian[$i];?></h5></a>
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
                <?php foreach($nira_pemurnian[$i] as $nira_pemurnian[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($nira_pemurnian[$i]->waktu));?></td>
                    <td><?=number_format($nira_pemurnian[$i]->brix,2);?></td>
                    <td><?=number_format($nira_pemurnian[$i]->pol,2);?></td>
                    <td><?=number_format($nira_pemurnian[$i]->hk,2);?></td>
                    <td><?=$nira_pemurnian[$i]->IU;?></td>
                    <td><?=$nira_pemurnian[$i]->cao;?></td>
                    <td><?=$nira_pemurnian[$i]->ph;?></td>
                    <td><?=$nira_pemurnian[$i]->tur;?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

        <?php for($i=0; $i < count($blotong); $i++): ?>
        <div class="col-md-4">
            <a href="<?=$url_blotong[$i];?>"><h5>Blotong <?=$sampel_blotong[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Pol</th>
                    <th>Air</th>
                </tr>
                <?php foreach($blotong[$i] as $blotong[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($blotong[$i]->waktu));?></td>
                    <td><?=number_format($blotong[$i]->Z,2);?></td>
                    <td><?=$blotong[$i]->kadar_air?></td>
                </tr>
                <?php endforeach; ?>
            </table><br>
        </div>
        <?php endfor; ?>

    </div>

</div>
</section>
    