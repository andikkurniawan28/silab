<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Analisa</a></li>
        </ol>
    </nav>
    
    <hr>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>#</th>
                    <th>Time</th>
                    <th>IU</th>
                    <th>Air</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>HK</th>
                    <th>SO<sub>2</sub></th>
                    <th>SD</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->bahan;?></td>
                    <td><?=$hasil_analisa->waktu;?></td>
                    <td><?=$hasil_analisa->IU;?></td>
                    <td><?=$hasil_analisa->kadar_air;?></td>
                    <td><?=number_format($brix = 100-$hasil_analisa->kadar_air,2);?></td>
                    <td><?=number_format($pol = ($hasil_analisa->hk * $brix) / 100,2);?></td>
                    <td><?=$hasil_analisa->hk;?></td>
                    <td><?=$hasil_analisa->so2;?></td>
                    <td><?=$hasil_analisa->bjb;?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</div>
</section>

