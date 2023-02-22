<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php
    foreach ($data as $item) {

        ?>
    <div>
        <?= $item->name; ?>
        <?= $item->sku; ?>
        <?= $item->price * 0.82; ?>
        <?= $item->price; ?>
        
        <br/>
    </div>

    <?php

    }

    ?>
</div>
