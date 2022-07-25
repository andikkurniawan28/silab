<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('home/show_hasil_analisa');?>">Hasil Analisa</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa/pemurnian');?>">Pemurnian</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
            <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa/pemurnian/download_analisa_blotong/'.$page_id);?>">Download</a></li>
        </ol>
    </nav>
    <hr><br>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <!-- <th>#</th> -->
                    <th>Time</th>
                    <th>Pol</th>
                    <th>Air</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <!-- <td><?=$hasil_analisa->bahan;?></td> -->
                    <td><?=date('d/m/y H:i', strtotime($hasil_analisa->waktu));?></td>
                    <td><?=$hasil_analisa->Z;?></td>
                    <td><?=$hasil_analisa->kadar_air;?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</div>
</section>

