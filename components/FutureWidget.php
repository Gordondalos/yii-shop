<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 19:20
 */

namespace app\components;
use yii\base\Widget;

class FutureWidget extends Widget {

    public $products;
    public $title;

    public function run() {
        return $this->render('future', [
            'products' => $this->products,
            'title' => $this->title
        ]);
    }
}