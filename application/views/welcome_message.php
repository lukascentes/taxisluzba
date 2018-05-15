<?php include_once('header.php');?>
    <div class="container">
    <h3>Taxikári</h3>
<?php if($msg=$this->session->flashdata('msg'));?>

<?php echo $msg;?>
<?php echo anchor('welcome/create', 'Vložiť taxikára',['class'=>'btn btn-primary']);?>

    <table class="table table-hover">
    <thead>
    <tr>

                <th scope="col">Meno</th>
                <th scope="col">Priezvisko</th>
                <th scope="col">Vek</th>
                <th scope="col">Bydlisko</th>
                <th scope="col">Prax</th>
                <th scope="col">Akcia</th>
    </tr>
    </thead>
    <tbody>

<?php if(count($posts)):?>
    <?php foreach ($posts as $post):?>

                    <tr>
                        <td><?php echo $post->meno;?></td>
                        <td><?php echo $post->priezvisko;?></td>
                        <td><?php echo $post->vek;?></td>
                        <td><?php echo $post->Bydlisko;?></td>
                        <td><?php echo $post->prax_v_odbore_v_r;?></td>

                        <td>
                            <?php echo anchor("welcome/view/{$post->ID}", 'Detail',['class'=>'label label-primary']);?>
                            <?php echo anchor("welcome/update/{$post->ID}", 'Upraviť',['class'=>'btn btn-success']);?>
                            <?php echo anchor("welcome/delete/{$post->ID}", 'Vymazať',['class'=>'btn btn-danger']);?>
                        </td>
                    </tr>
    <?php endforeach;?>
<?php else: ?>

                <tr>
                    <td>NEnájdené údaje!!</td>
                </tr>
<?php endif;?>
    </tbody>

    </table>
    </div>
<?php include_once('footer.php');?> 
