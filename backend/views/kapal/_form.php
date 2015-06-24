<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kapal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kapal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kapal_nama')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'kapal_neg')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
