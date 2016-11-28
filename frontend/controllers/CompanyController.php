<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\CompanyForm;


class CompanyController extends Controller
{
    public function actionIndex()
    {
        $model = new CompanyForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Done!');
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
            }

            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}