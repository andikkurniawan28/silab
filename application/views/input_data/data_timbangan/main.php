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
                    <th>berat_tebu</th>
                    <th>Totalizer</th>
                    <th>Flow NM</th>
                    <th>NM % Tebu</th>
                    <th>Control</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->kode_analisa;?></td>
                    <td><?=$hasil_analisa->waktu;?></td>
                    <td><?=$hasil_analisa->berat_tebu;?></td>
                    <td><?=$hasil_analisa->totalizer;?></td>
                    <td><?=$hasil_analisa->flow_nm;?></td>
                    <td><?=$hasil_analisa->nm_tebu;?></td>
                    <td>
                        <a href="<?=$form_handler_update.
                            $hasil_analisa->kode_analisa.'/'.
                            $hasil_analisa->berat_tebu.'/'.
                            $hasil_analisa->totalizer.'/'.
                            $hasil_analisa->flow_nm.'/'.
                            $hasil_analisa->nm_tebu.'/'
                            ;?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?=$form_handler_delete.$hasil_analisa->kode_analisa;?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

      </div>

</div>

</div>
</section>

