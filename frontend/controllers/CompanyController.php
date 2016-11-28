<?php
namespace frontend\controllers;

use Faker\Provider\ar_JO\Company;
use Yii;
use yii\web\Controller;

class CompanyController extends Controller
{
    public function actionIndex()
    {
        $model = new CompanyForm();
        return $this->render('index');
    }
}