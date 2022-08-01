

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h6><?=$page_title;?></h6>
            </div>
            <div class="card-body pt-0">
                <form action="<?=$form_handler_update;?>" method="post">

                    <input type="hidden" name="id" value="<?=$id;?>">

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Tanggal</label>
                        <input class="form-control" id="exampleInputEmail1" type="date" step="any" value="<?=$tanggal;?>" name="tanggal" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Volume T1</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$volume_t1;?>" name="volume_t1" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Meteran T1</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$meteran_t1;?>" name="meteran_t1" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Volume T2</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$volume_t2;?>" name="volume_t2" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Meteran T2</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$meteran_t2;?>" name="meteran_t2" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Volume T3</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$volume_t3;?>" name="volume_t3" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Meteran T3</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$meteran_t3;?>" name="meteran_t3" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Volume T4</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$volume_t4;?>" name="volume_t4" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Meteran T4</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$meteran_t4;?>" name="meteran_t4" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>