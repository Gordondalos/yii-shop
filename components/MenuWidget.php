<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 15:02
 */

namespace app\components;

use app\models\Category;
use Yii;
use yii\base\Widget;

class MenuWidget extends Widget {

    public $tpl;
    public $data; // записи категоирй из бд
    public $tree; // дерево из массива
    public $menuHtml; // готовый html

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu.php';
        } else {
            $this->tpl .= '.php';
        }
    }

    // метод строит из плоского массива дерево
    protected function getTree() {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree) {
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    protected function catToTemplate($category) {
        ob_start(); // буферизируем вывод
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

    public function run() {
        // get cache
        $menu = Yii::$app->cache->get('menu');
        if ($menu) {
            return $menu;
        } else {
            $this->data = Category::find()->asArray()->indexBy('id')->all();
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);
            // set cache
            Yii::$app->cache->set('menu', $this->menuHtml, 60*60*60*24);
            return $this->menuHtml;
        }
    }


}