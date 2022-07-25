<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('home/show_hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa/gilingan');?>">Gilingan</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa/gilingan/download_analisa_npp');?>">Download</a></li>
        </ol>
    </nav><hr>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <!-- <th>#</th> -->
                    <th>Time</th>
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>Rendemen</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <!-- <td><?=$hasil_analisa->id;?></td> -->
                    <td><?=date('d/m/y H:i', strtotime($hasil_analisa->time));?></td>
                    <td><?=number_format($hasil_analisa->brix,2);?></td>
                    <td><?=number_format($hasil_analisa->pol,2);?></td>
                    <td><?=number_format($hasil_analisa->rendemen,2);?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</div>
</section>

  