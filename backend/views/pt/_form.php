<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'company_address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'company_start')->textInput() ?>

    <?= $form->field($model, 'company_created_date')->textInput() ?>

    <?= $form->field($model, 'company_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
