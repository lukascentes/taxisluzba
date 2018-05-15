<?php include_once('header.php');?>
<div class="container">
        <?php echo form_open ("welcome/changeauto/{$post->ID}", ['class' =>'form-horizontal']);?>
    <fieldset>
        <legend>Upraviť záznam</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Značka</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'značka', 'placeholder' => 'Značka', 'class' => 'form-control','value'=>set_value('značka', $post->značka)]);?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Model</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'model', 'placeholder' => 'Model', 'class' => 'form-control','value'=>set_value('model', $post->model)]);?>
            </div>

        </div>


        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Rok_výroby</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'rok_výroby', 'placeholder' => 'Rok Výroby', 'class' => 'form-control','value'=>set_value('rok_výroby', $post->rok_výroby)]);?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Farba</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'farba', 'placeholder' => 'Farba', 'class' => 'form-control','value'=>set_value('farba', $post->farba)]);?>
            </div>
        </div>



        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Stav_odometra</label>
            <div class="col-md-3">

                <?php echo form_input(['name' => 'stav_odometra', 'placeholder' => 'Stav ODO', 'class' => 'form-control','value'=>set_value('stav_odometra', $post->stav_odometra)]);?>
            </div>
        </div>



        <div class="form-group">
            <div class = "col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-default']);?>
                <?php echo anchor ('Welcome/autaview','Back',['class=> btn btn-default']);?>
            </div>
        </div>
    </fieldset>
    <?php  echo form_close();?>
</div>
<?php include_once('footer.php');?>
 

