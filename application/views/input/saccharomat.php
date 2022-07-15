

    <div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/input');?>">Input Data</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
            <li class="breadcrumb-item"><a href="<?=base_url('saccharomat_control/create_saccharomat');?>">Tambah Data</a></li>
        </ol>
    </nav>
    <hr><br>

<div class="row">

      <div class="col-md-12">
            
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-sm table-bordered table-hover text-xs">
                    <tr>
                        <th>#</th>
                        <th>ID Sampel</th>
                        <th>Time</th>
                        <th>Brix</th>
                        <th>Pol</th>
                        <th>Pol Baca</th>
                        <th>HK</th>
                        <th>Control</th>
                    </tr>
                    <?php foreach($hasil_analisa as $hasil_analisa): ?>
                        <tr>
                            <td><?=$hasil_analisa->id;?></td>
                            <td><?=$hasil_analisa->bahan;?></td>
                            <td><?=$hasil_analisa->waktu;?></td>
                            <td><?=$hasil_analisa->brix;?></td>
                            <td><?=$hasil_analisa->pol;?></td>
                            <td><?=$hasil_analisa->Z;?></td>
                            <td><?=$hasil_analisa->hk;?></td>
                            <td>
                            </td>
                        </tr>
                  <?php endforeach; ?>

              </table>

      </div>

</div>

</div>

</section>

