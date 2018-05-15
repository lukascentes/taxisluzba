<?php include_once('header.php');?>
    <div class="container">
        <h3>Detail</h3>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Značka</label>
            <div class="col-md-5">
                <?php echo $post->značka;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Model</label>
            <div class="col-md-5">
                <?php echo $post->model;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Rok výroby</label>
            <div class="col-md-5">
                <?php echo $post->rok_výroby;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Farba</label>
            <div class="col-md-5">
                <?php echo $post->farba;?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control label">Stav ODO</label>
            <div class="col-md-5">
                <?php echo $post->stav_odometra;?>
            </div>
        </div>
        <?php echo anchor('welcome/autaview','Back', ['class'=>'btn btn-default']);?>
    </div>
<?php include_once('footer.php');?>