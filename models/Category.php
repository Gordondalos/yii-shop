<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 14:48
 */

namespace app\models;


use yii\db\ActiveRecord;

/*
 * Category
 * */
class Category extends ActiveRecord {

    public static function tableName() {
        return 'category';
    }

    public function getProduct() {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }

}