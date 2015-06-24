<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 55]) ?>

    <?= $form->field($model, 'pangkatgol')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'idkantor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
