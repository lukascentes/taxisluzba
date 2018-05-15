<?php include_once('header.php');?>
<form class = "container">


    <div>
        <?php echo form_open ('Welcome/savesluzba', ['class' =>'form-horizontal']);?>
        <legend>Vložiť jazdu</legend>
        <div class="form-group">
            <label for="imputEmail" class="col-md-2 control-label">Začiatok</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'začiatok', 'placeholder' => 'Začiatok', 'class' => 'form-control']);?>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-md-2 control-label">Koniec</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'koniec', 'placeholder' => 'Koniec', 'class' => 'form-control']);?>
            </div>

        </div>


        <div class="form-group">
            <label for="imputEmail" class="col-md-2 control-label">Počet kilometrov</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'počet_km_za_službu', 'placeholder' => 'Počet kilometrov za službu', 'class' => 'form-control']);?>
            </div>
        </div>

        <div class="form-group">
            <label for="imputEmail" class="col-md-2 control-label">Zárobok</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'zárobok', 'placeholder' => 'Zárobok', 'class' => 'form-control']);?>
            </div>
        </div>

        <div class="form-group">
            <label for="imputEmail" class="col-md-2 control-label">Stav ODO - začiatok</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'stav_odo_začiatok', 'placeholder' => 'Stav ODO - začiatok', 'class' => 'form-control']);?>
            </div>
        </div>

        <div class="form-group">
            <label for="imputEmail" class="col-md-2 control-label">Stav ODO - koniec</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'stav_odo_koniec', 'placeholder' => 'Stav ODO - koniec', 'class' => 'form-control']);?>
            </div>
        </div>


        <div class="form-group">
            <div class = "col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
                <?php echo anchor ('Welcome/sluzbaview','Back',['class=> btn btn-default']);?>
            </div>
            <div
                class="col-md-3"
</form>
</div>
<?php echo form_close();?>
</div>

<?php include_once('footer.php');?>

</form>
