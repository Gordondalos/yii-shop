<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 15:09
 */

namespace app\components;

use yii\base\Widget;

class BrandWidget extends Widget {

    public function run() {
        return $this->render('brand');
    }

}