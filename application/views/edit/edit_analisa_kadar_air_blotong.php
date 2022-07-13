

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h6>Analisa Blotong</h6>
            </div>
            <div class="card-body pt-0">

                <form action="<?=base_url('analisa/proses_edit_kadar_air_blotong');?>" method="post">
                    
                    <input type="hidden" name="id" value="<?=$id;?>">

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">ID Sampel</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$bahan;?>" name="bahan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Kadar Air</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$kadar_air;?>" name="kadar_air" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>