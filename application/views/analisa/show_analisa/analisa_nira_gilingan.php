

    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url('welcome/analisa');?>">Analisa</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url('welcome/hasil_analisa/gilingan');?>">Gilingan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
                <li class="breadcrumb-item"><a href="<?=base_url('welcome/download_analisa_gilingan/'.$id);?>">Download Excel</a></li>
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
                          <th>Brix</th>
                          <th>Pol</th>
                          <th>HK</th>

                            <?php if($this->session->userdata('role') == "admin"): ?>
                                <th>Control</th>
                            <?php endif; ?>
                            
                      </tr>

                        <?php foreach($hasil_analisa as $hasil_analisa): ?>
                            <tr>
                                <td><?=$hasil_analisa->id;?></td>
                                <td><?=$hasil_analisa->waktu;?></td>
                                <td><?=number_format($hasil_analisa->brix,2);?></td>
                                <td><?=number_format($hasil_analisa->pol,2);?></td>
                                <td><?=number_format($hasil_analisa->hk,2);?></td>

                                <?php if($this->session->userdata('role') == "admin"): ?>
                                <td>
                                    <a href="<?=base_url('analisa/edit_analisa_gilingan/'.$hasil_analisa->id.'/'.$hasil_analisa->brix.'/'.$hasil_analisa->pol.'/'.$hasil_analisa->bahan);?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="<?=base_url('analisa/hapus_analisa_gilingan/'.$hasil_analisa->id.'/'.$hasil_analisa->bahan);?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                                <?php endif; ?>

                            </tr>
                      <?php endforeach; ?>

                  </table>

          </div>

    </div>

</div>

</section>

