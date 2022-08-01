<div class="container-fluid">

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('home/show_input_data');?>">Input Data</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        <li class="breadcrumb-item"><a href="#" data-bs-toggle="modal" data-bs-target="#inputData">Tambah Data</a></li>
    </ol>
</nav><hr>

<div class="row">

      <div class="col-md-12">
            
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>#</th>
                    <th>Time</th>
                    <th>Belerang</th>
                    <th>Kapur</th>
                    <th>Floc Total</th>
                    <th>NaOH Evap</th>
                    <th>Bulab</th>
                    <th>DIIAL</th>
                    <th>B894</th>
                    <th>B895</th>
                    <th>B210</th>
                    <th>Asam Phospat</th>
                    <th>Blotong</th>
                    <th>Control</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->id_analisa;?></td>
                    <td><?=$hasil_analisa->waktu;?></td>
                    <td><?=$hasil_analisa->belerang;?></td>
                    <td><?=$hasil_analisa->kapur;?></td>
                    <td><?=$hasil_analisa->floc_total;?></td>
                    <td><?=$hasil_analisa->naoh_evap;?></td>
                    <td><?=$hasil_analisa->bulab;?></td>
                    <td><?=$hasil_analisa->diial;?></td>
                    <td><?=$hasil_analisa->b894;?></td>
                    <td><?=$hasil_analisa->b895;?></td>
                    <td><?=$hasil_analisa->b210;?></td>
                    <td><?=$hasil_analisa->asam_phospat;?></td>
                    <td><?=$hasil_analisa->blotong;?></td>
                    <td>
                        <a href="<?=$form_handler_update.
                            $hasil_analisa->id_analisa.'/'.
                            $hasil_analisa->belerang.'/'.
                            $hasil_analisa->kapur.'/'.
                            $hasil_analisa->floc_total.'/'.
                            $hasil_analisa->naoh_evap.'/'.
                            $hasil_analisa->bulab.'/'.
                            $hasil_analisa->diial.'/'.
                            $hasil_analisa->b894.'/'.
                            $hasil_analisa->b895.'/'.
                            $hasil_analisa->b210.'/'.
                            $hasil_analisa->asam_phospat.'/'.
                            $hasil_analisa->blotong.'/'
                            ;?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?=$form_handler_delete.$hasil_analisa->id_analisa;?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

      </div>

</div>

</div>
</section>

