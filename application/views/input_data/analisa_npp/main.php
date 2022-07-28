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
                    <th>Brix</th>
                    <th>Pol</th>
                    <th>Rendemen</th>
                    <th>Control</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->id;?></td>
                    <td><?=$hasil_analisa->time;?></td>
                    <td><?=$hasil_analisa->brix;?></td>
                    <td><?=$hasil_analisa->pol;?></td>
                    <td><?=$hasil_analisa->rendemen;?></td>
                    <td>
                        <a href="<?=$form_handler_update.
                            $hasil_analisa->id.'/'.
                            $hasil_analisa->brix.'/'.
                            $hasil_analisa->pol.'/'
                            ;?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?=$form_handler_delete.$hasil_analisa->id;?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

      </div>

</div>

</div>
</section>

