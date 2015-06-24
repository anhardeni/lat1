<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tnegpelabuhan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tnegpelabuhan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpel')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'negarapelabuhan')->textInput(['maxlength' => 55]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
