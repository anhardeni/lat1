<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tagen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'npwp')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'namaagen')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'alamat1')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'alamat2')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
