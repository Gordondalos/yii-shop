<?php
/**
 * Author: Gordondalos
 * Date: 17.02.2019
 * Time: 18:07
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController {



    public function actionIndex(){
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

    public function actionView($id){
        //$id = Yii::$app->request->get('id');
        $products = Product::find()->where(['category_id' => $id])->limit(12)->all();
        $category = Category::findOne($id);
        return $this->render('view', compact('products', 'category'));
    }
}