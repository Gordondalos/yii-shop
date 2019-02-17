<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 18:54
 */

namespace app\components;


use yii\base\Widget;

class AdvertsWidget extends Widget {

    public function run() {
        return $this->render('advertise');
    }
}