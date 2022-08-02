<div class="container-fluid">

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('home/show_monitoring');?>">Monitoring</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
        <?php if($this->session->userdata('role') == 'admin') : ?>
        <li class="breadcrumb-item"><a href="<?=base_url('input_data/timbangan_rs_in_control');?>">Adjust</a></li>
        <?php endif; ?>
    </ol>
</nav><hr>

<div class="row">

      <div class="col-md-12">

            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Keterangan</th>
                    <th>Tertimbang<sub>(Kg)</sub></th>
                </tr>
                <tr>
                    <td>Kemarin</td>
                    <td><?=$total_kemarin;?></td>
                </tr>
                <tr>
                    <td>SD Kemarin</td>
                    <td><?=$total_sd_kemarin;?></td>
                </tr>
                <tr>
                    <td>SD Hari Ini</td>
                    <td><?=$total_sd_hari_ini;?></td>
                </tr>
                <tr>
                    <td>SD Saat Ini</td>
                    <td><?=$total_sd_saat_ini;?></td>
                </tr>
            </table>

            <hr>

            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>Jam Timbang</th>
                    <th>Tertimbang<sub>(Kg)</sub></th>
                </tr>

                <?php for($i=0; $i<24; $i++): ?>
                <tr>
                    <td><?=$i;?>:00 - <?=$i+1;?>:00</td>
                    <td><?=$total_per_jam[$i];?></td>
                </tr>
                <?php endfor; ?>
            </table>

            <hr>

            <table class="table table-sm table-bordered table-hover text-xs">
                <tr>
                    <th>#</th>
                    <th>Time</th>
                    <th>Bruto</th>
                    <th>Tara</th>
                    <th>Netto</th>
                </tr>
                <?php foreach($hasil_analisa as $hasil_analisa): ?>
                <tr>
                    <td><?=$hasil_analisa->id;?></td>
                    <td><?=$hasil_analisa->time;?></td>
                    <td><?=$hasil_analisa->bruto;?></td>
                    <td><?=$hasil_analisa->tara;?></td>
                    <td><?=$hasil_analisa->netto;?></td>
                </tr>
                <?php endforeach; ?>
            </table>

      </div>

</div>

</div>
</section>

