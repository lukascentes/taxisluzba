<?php include_once('header.php');?>
<div class="container">
    <h3>Jazdy</h3>
    <?php if($msg=$this->session->flashdata('msg'));?>
    <?php echo $msg;?>
    <?php echo anchor('welcome/vlozjazdu', 'Vložiť jazdu',['class'=>'btn btn-primary']);?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Začiatok</th>
            <th scope="col">Koniec</th>
            <th scope="col">Počet kilometrov</th>
        </tr>
        </thead>
        <tbody>
        <?php if(count($post)):?>
            <?php foreach ($post as $post):?>
                <tr>
                    <td><?php echo $post->začiatok;?></td>
                    <td><?php echo $post->koniec;?></td>
                    <td><?php echo $post->počet_km;?></td>

                    <td>
                        <?php echo anchor("Welcome/view/{$post->ID}", 'View',['class'=>'label label-primary']);?>
                        <?php echo anchor("Welcome/update/{$post->ID}", 'Update',['class'=>'btn btn-success']);?>
                        <?php echo anchor("Welcome/delete/{$post->ID}", 'Delete',['class'=>'btn btn-danger']);?>
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





