<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 15:11
 */

namespace app\components;


use yii\base\Widget;

class ReclaWidget extends Widget {

    public function run() {
        return $this->render('recla');
    }

}