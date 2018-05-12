<?php include_once('header.php');?>
<form class = "container">


        <div>
            <?php echo form_open ('Welcome/save', ['class' =>'form-horizontal']);?>
            <legend>Vložiť taxikára</legend>
            <div class="form-group">
                <label for="imputEmail" class="col-md-2 control-label">Meno</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'meno', 'placeholder' => 'Meno', 'class' => 'form-control']);?>
                </div>
            </div>
            <div class="form-group">
                <label for="textArea" class="col-md-2 control-label">Priezvisko</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'priezvisko', 'placeholder' => 'Priezvisko', 'class' => 'form-control']);?>
                </div>

            </div>


            <div class="form-group">
                <label for="imputEmail" class="col-md-2 control-label">Vek</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'vek', 'placeholder' => 'Vek', 'class' => 'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="imputEmail" class="col-md-2 control-label">Bydlisko</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'bydlisko', 'placeholder' => 'Bydlisko', 'class' => 'form-control']);?>
                </div>
            </div>



            <div class="form-group">
                <label for="imputEmail" class="col-md-2 control-label">Prax</label>
                <div class="col-md-3">

                    <?php echo form_input(['name' => 'prax', 'placeholder' => 'Prax', 'class' => 'form-control']);?>
                </div>
            </div>



            <div class="form-group">
                <div class = "col-md-10 col-md-offset-2">
                    <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
                    <?php echo anchor ('welcome','Back',['class=> btn btn-default']);?>
                </div>
                <div
                        class="col-md-3"
                </form>
            </div>
            <?php echo form_close();?>
        </fieldset>

<?php include_once('footer.php');?>


