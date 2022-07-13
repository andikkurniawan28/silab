

    <div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/analisa');?>">Analisa</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/hasil_analisa/rs');?>">RS</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/hasil_analisa/gula');?>">Gula</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
            <li class="breadcrumb-item"><a href="<?=base_url('welcome/download_analisa_gula/'.$id);?>">Download Excel</a></li>
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
                      <th>IU</th>
                      <th>Air</th>
                      <th>Brix</th>
                      <th>Pol</th>
                      <th>HK</th>
                      <th>SO<sub>2</sub></th>
                      <th>SD</th>

                        <?php if($this->session->userdata('role') == "admin"): ?>
                            <th>Control</th>
                        <?php endif; ?>
                        
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

                            <?php if($this->session->userdata('role') == "admin"): ?>
                            <td>
                                <a href="<?=base_url('analisa/edit_coloromat/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->IU.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-warning">ICUMSA</a>
                                <a href="<?=base_url('analisa/edit_analisa_kadar_air_cake/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->kadar_air.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-secondary">Kadar Air</a>
                                <a href="<?=base_url('analisa/edit_hk_gula/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->hk.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-primary">HK</a>
                                <a href="<?=base_url('analisa/edit_analisa_so2/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->so2.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-success">SO<sub>2</sub></a>
                                <a href="<?=base_url('analisa/edit_analisa_bjb/'.
                                    $hasil_analisa->id.'/'.
                                    $hasil_analisa->bjb.'/'.
                                    $hasil_analisa->bahan);?>" class="btn btn-sm btn-info">BJB</a>
                                <a href="<?=base_url('analisa/hapus_coloromat/'.$hasil_analisa->id.'/'.$hasil_analisa->bahan);?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                            <?php endif; ?>

                        </tr>
                  <?php endforeach; ?>

              </table>

      </div>

</div>

</div>

</section>

