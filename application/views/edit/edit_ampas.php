

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h6>Analisa Ampas Gilingan</h6>
            </div>
            <div class="card-body pt-0">
                <form action="<?=base_url('analisa/proses_edit_analisa_ampas');?>" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Pol</label>
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <input type="hidden" name="bahan" value="<?=$bahan;?>">
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$pol_koreksi;?>" name="pol_koreksi" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleInputPassword1">ZK</label>
                        <input class="form-control" id="exampleInputPassword1" type="number" step="any" value="<?=$zk;?>" name="zk" required>
                    </div>
                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>