<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="site-index">

    <div class="body-content col-lg-4">
        <p>Company</p>
        <?php $form = ActiveForm::begin(['id' => 'company-form']); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'site') ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'address') ?>

        <?= $form->field($model, 'date') ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'company-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
