<?php include_once('header.php');?>
<div class="container">
    <h3>Služobné autá</h3>
    <?php if($msg=$this->session->flashdata('msg'));?>

    <?php echo $msg;?>
    <?php echo anchor('welcome/vlozauto', 'Vložiť auto',['class'=>'btn btn-primary']);?>
<table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Značka</th>
                <th scope="col">Model</th>
                <th scope="col">Rok výroby</th>
                <th scope="col">Farba</th>
                <th scope="col">Stav odometra</th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr><td><?php echo $post->značka;?></td>
                        <td><?php echo $post->model;?></td>
                        <td><?php echo $post->rok_výroby;?></td>
                        <td><?php echo $post->farba;?></td>
                        <td><?php echo $post->stav_odometra;?></td>
                        <td>
                            <?php echo anchor("Welcome/detailauta/{$post->ID}", 'Detail',['class'=>'label label-primary']);?>
                            <?php echo anchor("Welcome/updateauta/{$post->ID}", 'Upraviť',['class'=>'btn btn-success']);?>
                            <?php echo anchor("Welcome/deleteauto/{$post->ID}", 'Vymazať',['class'=>'btn btn-danger']);?>
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






