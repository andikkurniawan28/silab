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

        <?php for($i=0; $i < count($nira_gilingan); $i++): ?>
        <div class="col-md-4">
                                
            <a href="<?=$url_nira_gilingan[$i];?>"><h5><?=$sampel_ng[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <?php if($i==0) : ?>
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>Rend</th>
                </tr>
                <?php else : ?>
                <tr>
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                </tr>
                <?php endif; ?>
                <?php if($i == 0) : ?>
                <?php foreach($nira_gilingan[$i] as $nira_gilingan[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($nira_gilingan[$i]->time));?></td>
                    <td><?=number_format($nira_gilingan[$i]->brix,2);?></td>
                    <td><?=number_format($nira_gilingan[$i]->pol,2);?></td>
                    <td><?=number_format($nira_gilingan[$i]->rendemen,2);?></td>
                 </tr>
                <?php endforeach; ?>
                <?php else : ?>
                <?php foreach($nira_gilingan[$i] as $nira_gilingan[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($nira_gilingan[$i]->waktu));?></td>
                    <td><?=number_format($nira_gilingan[$i]->brix,2);?></td>
                    <td><?=number_format($nira_gilingan[$i]->pol,2);?></td>
                    <td><?=number_format($nira_gilingan[$i]->hk,2);?></td>
                 </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </table><br>

        </div>
        <?php endfor; ?>

        <?php for($i=0; $i <= count($ampas_gilingan)-1; $i++): ?>
        <div class="col-md-4">
                                
            <a href="<?=$url_ampas_gilingan[$i];?>"><h5><?=$sampel_ag[$i];?></h5></a>
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Time</th>
                    <th>Pol</th>
                    <th>ZK</th>
                    <th>Air</th>
                </tr>
                <?php foreach($ampas_gilingan[$i] as $ampas_gilingan[$i]): ?>
                <tr>
                    <td><?=date('H:i', strtotime($ampas_gilingan[$i]->waktu));?></td>
                    <td><?=number_format($ampas_gilingan[$i]->pol_koreksi,2);?></td>
                    <td><?=number_format($ampas_gilingan[$i]->zk,2);?></td>
                    <td><?=number_format($ampas_gilingan[$i]->kadar_air,2);?></td>
                 </tr>
                <?php endforeach; ?>
            </table><br>

        </div>
        <?php endfor; ?>

    </div>

</div>
</section>
    