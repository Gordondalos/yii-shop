<?php use yii\helpers\Html; ?>

<div class="features_items">
    <?php if (!empty($products)): ?>
        <h2 class="title text-center"><?= $title ?></h2>
        <div class="row">

            <?php
            $i = 0;
            foreach ($products as $key => $val):
                $i++;
            ?>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <?= Html::img("@web/images/products/{$val->img}", [
                                    'alt' => $val->name
                                ]) ?>
                                <h2>$<?= $val->price ?></h2>
                                <p><?= $val->name ?></p>
                                <a href="#" class="btn btn-default add-to-cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>$<?= $val->price ?></h2>
                                    <p><?= $val->name ?></p>
                                    <a href="#" class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i
                                        >Add to cart
                                    </a>
                                </div>
                            </div>
                            <?php
                            if ($val->sale):
                                ?>
                                <?= Html::img('@web/images/home/sale.png', ['class' => 'sale', 'alt' => 'Распродажа']) ?>
                            <? endif; ?>
                            <?php
                            if ($val->new):
                                ?>
                                <?= Html::img('@web/images/home/new.png', ['class' => 'new', 'alt' => 'Новинка']) ?>
                            <? endif; ?>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php if( $i % 3 == 0): ?>
            <div class="clearfix"></div>
            <?php endif; ?>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>