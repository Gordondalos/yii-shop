<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 14:51
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord {

    public static function tableName() {
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}