

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
                        <label class="form-label" for="exampleInputPassword1">ID Sampel</label>
                        <input class="form-control" id="exampleInputPassword1" type="number" step="any" value="<?=$bahan;?>" name="bahan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputPassword1">CaO</label>
                        <input class="form-control" id="exampleInputPassword1" type="number" step="any" value="<?=$cao;?>" name="cao" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">pH</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$ph;?>" name="ph" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Turbidity</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$tur;?>" name="tur" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                </form>
            </div>
        </div>

    </div>
</div>

</div>