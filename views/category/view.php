<?php

use app\components\AdvertsWidget;
use app\components\FutureWidget;
use app\components\SidebarWidget;

$this->title = $category->name;
?>

<?= AdvertsWidget::widget() ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?= SidebarWidget::widget() ?>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->

                    <?= FutureWidget::widget(['products' => $products, 'title' => 'Товары ('.$category->name.')']) ?>

                    <div class="clearfix"></div>
                    <?php if (!empty($products)): ?>
                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    <?php endif; ?>

                    <?php if (empty($products)): ?>
                        <h1>Товаров в этой категории нет</h1>
                    <?php endif; ?>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
