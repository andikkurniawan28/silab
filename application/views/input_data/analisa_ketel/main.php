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
                    <th rowspan="2">#</th>
                    <th rowspan="2">Time</th>
                    <th colspan="4">JJ</th>
                    <th colspan="2">DJJ</th>
                    <th colspan="4">Y1</th>
                    <th colspan="4">Y2</th>
                    <th colspan="2">DY</th>
                    <th colspan="3">WTP</th>
                    <th colspan="3">HW</th>
                    <th colspan="2">Volume</th>
                    <th colspan="2">Control</th>
                </tr>
                <tr>
                    <th>Hardness</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Phospat</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Hardness</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Phospat</th>
                    <th>Hardness</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Phospat</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Hardness</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Hardness</th>
                    <th>TDS</th>
                    <th>pH</th>
                    <th>Tangki 1</th>
                    <th>Tangki 2</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->id_analisa;?></td>
                    <td><?=$hasil_analisa->waktu;?></td>
                    <td><?=$hasil_analisa->sadah_jj;?></td>
                    <td><?=$hasil_analisa->tds_jj;?></td>
                    <td><?=$hasil_analisa->ph_jj;?></td>
                    <td><?=$hasil_analisa->phospat_jj;?></td>
                    <td><?=$hasil_analisa->tds_djj;?></td>
                    <td><?=$hasil_analisa->ph_djj;?></td>
                    <td><?=$hasil_analisa->sadah_y1;?></td>
                    <td><?=$hasil_analisa->tds_y1;?></td>
                    <td><?=$hasil_analisa->ph_y1;?></td>
                    <td><?=$hasil_analisa->phospat_y1;?></td>
                    <td><?=$hasil_analisa->sadah_y2;?></td>
                    <td><?=$hasil_analisa->tds_y2;?></td>
                    <td><?=$hasil_analisa->ph_y2;?></td>
                    <td><?=$hasil_analisa->phospat_y2;?></td>
                    <td><?=$hasil_analisa->tds_dy;?></td>
                    <td><?=$hasil_analisa->ph_dy;?></td>
                    <td><?=$hasil_analisa->sadah_wtp;?></td>
                    <td><?=$hasil_analisa->tds_wtp;?></td>
                    <td><?=$hasil_analisa->ph_wtp;?></td>
                    <td><?=$hasil_analisa->sadah_hw;?></td>
                    <td><?=$hasil_analisa->tds_hw;?></td>
                    <td><?=$hasil_analisa->ph_hw;?></td>
                    <td><?=$hasil_analisa->volume_tangki1;?></td>
                    <td><?=$hasil_analisa->volume_tangki2;?></td>
                    <td>
                        <a href="<?=$form_handler_update.
                            $hasil_analisa->id_analisa.'/'.
                            $hasil_analisa->sadah_jj.'/'.
                            $hasil_analisa->tds_jj.'/'.
                            $hasil_analisa->ph_jj.'/'.
                            $hasil_analisa->phospat_jj.'/'.
                            $hasil_analisa->tds_djj.'/'.
                            $hasil_analisa->ph_djj.'/'.
                            $hasil_analisa->sadah_y1.'/'.
                            $hasil_analisa->tds_y1.'/'.
                            $hasil_analisa->ph_y1.'/'.
                            $hasil_analisa->phospat_y1.'/'.
                            $hasil_analisa->sadah_y2.'/'.
                            $hasil_analisa->tds_y2.'/'.
                            $hasil_analisa->ph_y2.'/'.
                            $hasil_analisa->phospat_y2.'/'.
                            $hasil_analisa->tds_dy.'/'.
                            $hasil_analisa->ph_dy.'/'.
                            $hasil_analisa->sadah_wtp.'/'.
                            $hasil_analisa->tds_wtp.'/'.
                            $hasil_analisa->ph_wtp.'/'.
                            $hasil_analisa->sadah_hw.'/'.
                            $hasil_analisa->tds_hw.'/'.
                            $hasil_analisa->ph_hw.'/'.
                            $hasil_analisa->volume_tangki1.'/'.
                            $hasil_analisa->volume_tangki2;?>" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="<?=$form_handler_delete.$hasil_analisa->id_analisa;?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

      </div>

</div>

</div>
</section>

