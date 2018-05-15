<?php include_once('header.php');?>
<div class="container">
    <?php echo form_open('welcome/saveauto',['class'=>'form-horizontal']);?>

    <fieldset>
        <legend>Vložiť auto</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Značka</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'značka', 'placeholder' => 'Značka', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('značka','<div class="text-danger">','</div>');?>
            </div>

        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Model</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'model', 'placeholder' => 'Model', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('model','<div class="text-danger">','</div>');?>
            </div>

        </div>


        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Rok výroby</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'rok_výroby', 'placeholder' => 'Rok Výroby', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('rok_výroby','<div class="text-danger">','</div>');?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Farba</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'farba', 'placeholder' => 'Farba', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('farba','<div class="text-danger">','</div>');?>
            </div>
        </div>



        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Stav odometra</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'stav_odometra', 'placeholder' => 'Stav ODO', 'class' => 'form-control']);?>
            </div>
            <div class="col-md-5">
                <?php echo form_error('stav_odometra','<div class="text-danger">','</div>');?>
            </div>
        </div>



        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
                <?php echo anchor ('Welcome/autaview','Back',['class=> btn btn-default']);?>
            </div>
        </div>
    </fieldset>
    <?php echo form_close();?>
</div>

<?php include_once('footer.php');?>


