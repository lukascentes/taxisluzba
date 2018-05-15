<?php include_once('header.php');?>
<div class="container">
        <?php echo form_open ("welcome/change/{$post->ID}", ['class' =>'form-horizontal']);?>
    <fieldset>
        <legend>Upraviť záznam</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Meno</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'meno', 'placeholder' => 'Meno', 'class' => 'form-control','value'=>set_value('meno', $post->meno)]);?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Priezvisko</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'priezvisko', 'placeholder' => 'Priezvisko', 'class' => 'form-control','value'=>set_value('priezvisko', $post->priezvisko)]);?>
            </div>

        </div>


        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Vek</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'vek', 'placeholder' => 'Vek', 'class' => 'form-control','value'=>set_value('vek', $post->vek)]);?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Bydlisko</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'Bydlisko', 'placeholder' => 'Bydlisko', 'class' => 'form-control','value'=>set_value('Bydlisko', $post->Bydlisko)]);?>
            </div>
        </div>



        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Prax</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'prax_v_odbore_v_r', 'placeholder' => 'Prax', 'class' => 'form-control','value'=>set_value('prax', $post->prax_v_odbore_v_r)]);?>
            </div>
        </div>



        <div class="form-group">
            <div class = "col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-default']);?>
                <?php echo anchor ('Welcome/taxikariview','Back',['class=> btn btn-default']);?>
            </div>
        </div>
    </fieldset>
    <?php  echo form_close();?>
</div>
<?php include_once('footer.php');?>
 

