<?php include_once('header.php');?>
    <div class="container">
        <h3>Detail</h3>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Meno</label>
            <div class="col-md-5">
                <?php echo $post->meno;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Priezvisko</label>
            <div class="col-md-5">
                <?php echo $post->priezvisko;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Vek</label>
            <div class="col-md-5">
                <?php echo $post->vek;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Bydlisko</label>
            <div class="col-md-5">
                <?php echo $post->Bydlisko;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Prax</label>
            <div class="col-md-5">
                <?php echo $post->prax_v_odbore_v_r;?>
            </div>
        </div>
        <?php echo anchor('welcome/taxikariview','Back', ['class'=>'btn btn-default']);?>
    </div>
<?php include_once('footer.php');?>