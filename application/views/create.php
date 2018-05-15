<?php include_once('header.php');?>
<div class="container">
    <?php echo form_open('welcome/save',['class'=>'form-horizontal']);?>

    <fieldset>
            <legend>Vložiť taxikára</legend>
            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Meno</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'meno', 'placeholder' => 'Meno', 'class' => 'form-control']);?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('meno','<div class="text-danger">','</div>');?>
                </div>

            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Priezvisko</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'priezvisko', 'placeholder' => 'Priezvisko', 'class' => 'form-control']);?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('priezvisko','<div class="text-danger">','</div>');?>
                </div>

            </div>


            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Vek</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'vek', 'placeholder' => 'Vek', 'class' => 'form-control']);?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('vek','<div class="text-danger">','</div>');?>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Bydlisko</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'Bydlisko', 'placeholder' => 'Bydlisko', 'class' => 'form-control']);?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('Bydlisko','<div class="text-danger">','</div>');?>
                </div>
            </div>



            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Prax</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'prax_v_odbore_v_r', 'placeholder' => 'Prax', 'class' => 'form-control']);?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('prax_v_odbore_v_r','<div class="text-danger">','</div>');?>
                </div>
            </div>



        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
            <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
                    <?php echo anchor ('Welcome/taxikariview','Back',['class=> btn btn-default']);?>
            </div>
        </div>
    </fieldset>
            <?php echo form_close();?>
        </div>

<?php include_once('footer.php');?>


