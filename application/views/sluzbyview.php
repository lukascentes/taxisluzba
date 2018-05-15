<?php include_once('header.php');?>
<div class="container">
    <h3>Služby</h3>
    <?php if ($msg=$this->session->flashdata('msg')):?>
        <?php echo $msg; ?>
    <?php endif;?>
    <?php echo anchor('welcome/vlozsluzbu', 'Vložiť službu',['class'=>'btn btn-primary']);?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Začiatok</th>
            <th scope="col">Koniec</th>
            <th scope="col">Počet KM za službu</th>
            <th scope="col">Zárobok</th>
            <th scope="col">Stav odometra - začiatok</th>
            <th scope="col">Stav odometra - koniec</th>
        </tr>
        </thead>
        <tbody>
        <?php if(count($post)):?>
            <?php foreach ($post as $post):?>
                <tr>
                    <td><?php echo $post->začiatok;?></td>
                    <td><?php echo $post->koniec;?></td>
                    <td><?php echo $post->počet_km_za_službu;?></td>
                    <td><?php echo $post->zárobok;?></td>
                    <td><?php echo $post->stav_odo_začiatok;?></td>
                    <td><?php echo $post->stav_odo_koniec;?></td>
                    <td>
                        <?php echo anchor("Welcome/detailsluzby/{$post->ID}", 'Detail',['class'=>'label label-primary']);?>
                        <?php echo anchor("Welcome/update/{$post->ID}", 'Upraviť',['class'=>'btn btn-success']);?>
                        <?php echo anchor("Welcome/deletesluzba/{$post->ID}", 'Vymazať',['class'=>'btn btn-danger']);?>
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






