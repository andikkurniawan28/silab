

    <div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/analisa');?>">Analisa</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/hasil_analisa/drk');?>">Drk</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/download_analisa_cake/'.$id);?>">Download Excel</a></li>
        </ol>
    </nav>
    <hr><br>

<div class="row">

      <div class="col-md-12">

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-sm table-bordered table-hover text-xs">
                  <tr>
                      <th>#</th>
                      <th>Time</th>
                      <th>Pol</th>
                      <th>Kadar Air</th>

                        <?php if($this->session->userdata('role') == "admin"): ?>
                            <th>Control</th>
                        <?php endif; ?>
                        
                  </tr>

                    <?php foreach($hasil_analisa as $hasil_analisa): ?>
                        <tr>
                            <td><?=$hasil_analisa->bahan;?></td>
                            <td><?=$hasil_analisa->waktu;?></td>
                            <td><?=$hasil_analisa->Z;?></td>
                            <td><?=$hasil_analisa->kadar_air;?></td>

                            <?php if($this->session->userdata('role') == "admin"): ?>
                            <td>
                                <a href="<?=base_url('analisa/edit_analisa_blotong/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->Z.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-warning">Pol</a>
                                <a href="<?=base_url('analisa/edit_analisa_kadar_air_cake/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->kadar_air.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-secondary">Kadar Air</a>
                                <a href="<?=base_url('analisa/hapus_saccharomat/'.$hasil_analisa->id.'/'.$hasil_analisa->bahan);?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                            <?php endif; ?>

                        </tr>
                  <?php endforeach; ?>

              </table>

      </div>

</div>

</div>

</section>

