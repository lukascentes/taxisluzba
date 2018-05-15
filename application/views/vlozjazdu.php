<?php include_once('header.php');?>
<div class = "container">
    <?php echo form_open ('Welcome/savejazda', ['class' =>'form-horizontal']);?>

    <fieldset>
        <legend>Vložiť jazdu</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Začiatok</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'začiatok', 'placeholder' => 'Začiatok', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('začiatok','<div class="text-danger">','</div>');?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Koniec</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'koniec', 'placeholder' => 'Koniec', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('koniec','<div class="text-danger">','</div>');?>
            </div>

        </div>


        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Počet kilometrov</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'počet_km', 'placeholder' => 'Počet kilometrov', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('počet_km','<div class="text-danger">','</div>');?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
                <?php echo anchor ('Welcome/jazdyview','Back',['class=> btn btn-default']);?>
            </div>
        </div>
    </fieldset>
    <?php echo form_close();?>
    </div>

    <?php include_once('footer.php');?>
