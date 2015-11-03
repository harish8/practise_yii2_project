<?php
/**
 * Created by PhpStorm.
 * User: harish
 * Date: 02/11/15
 * Time: 7:17 PM
 */
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller {

    public function actionIndex(){
        $query = Country::find();

        $pagination = new Pagination([
           'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->OrderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}