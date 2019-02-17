<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 19:14
 */

namespace app\components;


use yii\base\Widget;

class SidebarWidget extends  Widget {

    public function run() {
        return $this->render('sidebar');
    }

}