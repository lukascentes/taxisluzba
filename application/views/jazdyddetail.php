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
            <label for="textArea" class="col-md-2 control label">Počet KM</label>
            <div class="col-md-5">
                <?php echo $post->počet_km;?>
            </div>
        </div>

        <?php echo anchor('welcome/jazdaview','Back', ['class'=>'btn btn-default']);?>
    </div>
<?php include_once('footer.php');?>