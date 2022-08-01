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
                    <th>Tek. Evap</th>
                    <th>Tek. Pan</th>
                    <th>Suhu Evap</th>
                    <th>Suhu Heater</th>
                    <th>Suhu Air</th>
                    <th>Tek. Uap</th>
                    <th>Control</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->id_analisa;?></td>
                    <td><?=$hasil_analisa->waktu;?></td>
                    <td>
                        <?=$hasil_analisa->tekanan_hpreevap1;?>
                        <?=$hasil_analisa->tekanan_hpreevap2;?>
                        <?=$hasil_analisa->tekanan_hevap1;?>
                        <?=$hasil_analisa->tekanan_hevap2;?>
                        <?=$hasil_analisa->tekanan_hevap3;?>
                        <?=$hasil_analisa->tekanan_hevap4;?>
                        <?=$hasil_analisa->tekanan_hevap5;?>
                        <?=$hasil_analisa->tekanan_hevap6;?>
                        <?=$hasil_analisa->tekanan_hevap7;?>
                    </td>
                    <td>
                        <?=$hasil_analisa->tekanan_hmasakan1;?>
                        <?=$hasil_analisa->tekanan_hmasakan2;?>
                        <?=$hasil_analisa->tekanan_hmasakan3;?>
                        <?=$hasil_analisa->tekanan_hmasakan4;?>
                        <?=$hasil_analisa->tekanan_hmasakan5;?>
                        <?=$hasil_analisa->tekanan_hmasakan6;?>
                        <?=$hasil_analisa->tekanan_hmasakan7;?>
                        <?=$hasil_analisa->tekanan_hmasakan8;?>
                        <?=$hasil_analisa->tekanan_hmasakan9;?>
                        <?=$hasil_analisa->tekanan_hmasakan10;?>
                        <?=$hasil_analisa->tekanan_hmasakan11;?>
                        <?=$hasil_analisa->tekanan_hmasakan12;?>
                        <?=$hasil_analisa->tekanan_hmasakan13;?>
                        <?=$hasil_analisa->tekanan_hmasakan14;?>
                        <?=$hasil_analisa->tekanan_hmasakan15;?>
                        <?=$hasil_analisa->tekanan_hmasakan16;?>
                        <?=$hasil_analisa->tekanan_hmasakan17;?>
                        <?=$hasil_analisa->tekanan_hmasakan18;?>
                        <?=$hasil_analisa->tekanan_pompamasak;?>
                    </td>
                    <td>
                        <?=$hasil_analisa->suhu_uappreevap1;?>
                        <?=$hasil_analisa->suhu_uappreevap2;?>
                        <?=$hasil_analisa->suhu_uapevap1;?>
                        <?=$hasil_analisa->suhu_uapevap2;?>
                        <?=$hasil_analisa->suhu_uapevap3;?>
                        <?=$hasil_analisa->suhu_uapevap4;?>
                        <?=$hasil_analisa->suhu_uapevap5;?>
                        <?=$hasil_analisa->suhu_uapevap6;?>
                        <?=$hasil_analisa->suhu_uapevap7;?>
                    </td>
                    <td>
                        <?=$hasil_analisa->suhu_heater1;?>
                        <?=$hasil_analisa->suhu_heater2;?>
                        <?=$hasil_analisa->suhu_heater3;?>
                    </td>
                    <td>
                        <?=$hasil_analisa->suhu_airinjeksi;?>   
                        <?=$hasil_analisa->suhu_airterjun;?>
                    </td>
                    <td>
                        <?=$hasil_analisa->tekanan_uaptinggi;?>
                        <?=$hasil_analisa->tekanan_uaprendah;?> 
                        <?=$hasil_analisa->tekanan_uapbekas;?>
                    </td>
                    <td>
                        <a href="<?=$form_handler_update.
                            $hasil_analisa->id_analisa.'/'.
                            $hasil_analisa->tekanan_hpreevap1.'/'.
                            $hasil_analisa->tekanan_hpreevap2.'/'.
                            $hasil_analisa->tekanan_hevap1.'/'.
                            $hasil_analisa->tekanan_hevap2.'/'.
                            $hasil_analisa->tekanan_hevap3.'/'.
                            $hasil_analisa->tekanan_hevap4.'/'.
                            $hasil_analisa->tekanan_hevap5.'/'.
                            $hasil_analisa->tekanan_hevap6.'/'.
                            $hasil_analisa->tekanan_hevap7.'/'.
                            $hasil_analisa->tekanan_hmasakan1.'/'.
                            $hasil_analisa->tekanan_hmasakan2.'/'.
                            $hasil_analisa->tekanan_hmasakan3.'/'.
                            $hasil_analisa->tekanan_hmasakan4.'/'.
                            $hasil_analisa->tekanan_hmasakan5.'/'.
                            $hasil_analisa->tekanan_hmasakan6.'/'.
                            $hasil_analisa->tekanan_hmasakan7.'/'.
                            $hasil_analisa->tekanan_hmasakan8.'/'.
                            $hasil_analisa->tekanan_hmasakan9.'/'.
                            $hasil_analisa->tekanan_hmasakan10.'/'.
                            $hasil_analisa->tekanan_hmasakan11.'/'.
                            $hasil_analisa->tekanan_hmasakan12.'/'.
                            $hasil_analisa->tekanan_hmasakan13.'/'.
                            $hasil_analisa->tekanan_hmasakan14.'/'.
                            $hasil_analisa->tekanan_hmasakan15.'/'.
                            $hasil_analisa->tekanan_hmasakan16.'/'.
                            $hasil_analisa->tekanan_hmasakan17.'/'.
                            $hasil_analisa->tekanan_hmasakan18.'/'.
                            $hasil_analisa->tekanan_pompamasak.'/'.
                            $hasil_analisa->suhu_uappreevap1.'/'.
                            $hasil_analisa->suhu_uappreevap2.'/'.
                            $hasil_analisa->suhu_uapevap1.'/'.
                            $hasil_analisa->suhu_uapevap2.'/'.
                            $hasil_analisa->suhu_uapevap3.'/'.
                            $hasil_analisa->suhu_uapevap4.'/'.
                            $hasil_analisa->suhu_uapevap5.'/'.
                            $hasil_analisa->suhu_uapevap6.'/'.
                            $hasil_analisa->suhu_uapevap7.'/'.
                            $hasil_analisa->suhu_heater1.'/'.
                            $hasil_analisa->suhu_heater2.'/'.
                            $hasil_analisa->suhu_heater3.'/'.
                            $hasil_analisa->suhu_airinjeksi.'/'.
                            $hasil_analisa->suhu_airterjun.'/'.
                            $hasil_analisa->tekanan_uaptinggi.'/'.
                            $hasil_analisa->tekanan_uaprendah.'/'.
                            $hasil_analisa->tekanan_uapbekas.'/'
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

