

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
                        <label class="form-label" for="exampleInputEmail1">Time</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" step="any" value="<?=$time;?>" name="time" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Bruto</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$bruto;?>" name="bruto" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Tara</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$tara;?>" name="tara" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Netto</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$netto;?>" name="netto" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>