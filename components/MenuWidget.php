<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 15:02
 */

namespace app\components;

use yii\base\Widget;

class MenuWidget extends Widget {

    public $tpl;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }
    }

    public function run() {
        return $this->render($this->tpl);
    }

}