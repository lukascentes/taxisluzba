<?php include_once('header.php');?>
    <div class="container">
        <h3>Detail</h3>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Začiatok</label>
            <div class="col-md-5">
                <?php echo $post->začiatok;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Koniec</label>
            <div class="col-md-5">
                <?php echo $post->koniec;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Počet KM za službu</label>
            <div class="col-md-5">
                <?php echo $post->počet_km_za_službu;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Zárobok</label>
            <div class="col-md-5">
                <?php echo $post->zárobok;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Stav ODO - zač.</label>
            <div class="col-md-5">
                <?php echo $post->stav_odo_začiatok;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">stav_odo_koniec</label>
            <div class="col-md-5">
                <?php echo $post->stav_odo_koniec;?>
            </div>
        </div>
        <?php echo anchor('welcome/sluzbaview','Back', ['class'=>'btn btn-default']);?>
    </div>
<?php include_once('footer.php');?>