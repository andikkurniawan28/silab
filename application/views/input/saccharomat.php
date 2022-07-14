

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
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editData<?=$hasil_analisa->id;?>">Edit</button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusData<?=$hasil_analisa->id;?>">Delete</button>
                            </td>
                        </tr>
                        <!------------------------------------------------>
                        <div class="modal fade" id="editData<?=$hasil_analisa->id;?>" tabindex="-1" role="dialog" aria-labelledby="editDataLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editDataLabel">Edit Data <?=$page_title;?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?=$form_handler_update;?>" method="post">
                                            <div class="form-group">
                                                <label for="">ID Sampel</label>
                                                <input type="hidden" class="form-control" id="" name="id" value=<?=$hasil_analisa->id;?> required>
                                                <input type="number" class="form-control" id="" name="bahan" value=<?=$hasil_analisa->bahan;?> required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Brix</label>
                                                <input type="number" class="form-control" id="" name="brix" step="any" value=<?=$hasil_analisa->brix;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pol</label>
                                                <input type="number" class="form-control" id="" name="pol" step="any" value=<?=$hasil_analisa->pol;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pol Baca</label>
                                                <input type="number" class="form-control" id="" name="Z" step="any" value=<?=$hasil_analisa->Z;?>>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="denganHK">Hitung Dengan HK</button>
                                        <button type="submit" class="btn btn-secondary" name="tanpaHK">Hitung Tanpa HK</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------------>
                        <div class="modal fade" id="hapusData<?=$hasil_analisa->id;?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusDataLabel">Hapus Data <?=$page_title;?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item">ID Sampel <?=$hasil_analisa->bahan;?></li>
                                            <li class="list-group-item">Brix <?=$hasil_analisa->brix;?></li>
                                            <li class="list-group-item">Pol <?=$hasil_analisa->pol;?></li>
                                            <li class="list-group-item">Pol Baca <?=$hasil_analisa->Z;?></li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?=$form_handler_delete.$hasil_analisa->id;?>" type="submit" class="btn btn-primary">Ya</a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------------>
                  <?php endforeach; ?>

              </table>

      </div>

</div>

</div>

</section>

