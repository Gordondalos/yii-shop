<?php
use app\components\BrandWidget;
use app\components\MenuWidget;
use app\components\RangeWidget;
use app\components\ReclaWidget;
?>

<div class="left-sidebar">

    <ul class="catalog category-products">
        <h2>Категории</h2>
        <?= MenuWidget::widget(['tpl' => 'menu']) ?>
    </ul>

    <?= BrandWidget::widget() ?>
    <?= RangeWidget::widget() ?>
    <?= ReclaWidget::widget() ?>

</div>