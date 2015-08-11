<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tdafeksportir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tdafeksportir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'periode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglpeb')->textInput() ?>

    <?= $form->field($model, 'fasilitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlahpeb')->textInput() ?>

    <?= $form->field($model, 'jumlahNP')->textInput() ?>

    <?= $form->field($model, 'jumlahSanksi')->textInput() ?>

    <?= $form->field($model, 'datecreated')->textInput() ?>

    <?= $form->field($model, 'usercreated')->textInput() ?>

    <?= $form->field($model, 'nipttd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idteks')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
