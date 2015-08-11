<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Kapal;
use backend\models\Tagen;
use backend\models\Tnegpelabuhan;
use backend\models\Pegawai;
use dosamigos\datepicker\DatePicker;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model backend\models\Tmaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nolphsp')->textInput(['maxlength' => 6]) ?>

  
  <?= $form->field($model, 'tgllhpsp')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
  <?= $form->field($model, 'idkapal')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Kapal::find()->all(), 'kapal_id', 'kapal_nama'),
    'language' => 'en',
    'options' => ['placeholder' => 'Pilih Kapal ...'],
    'pluginOptions' => [
        'allowClear' => true
        
    
    ],
]);
?>
           
   
    <?= $form->field($model, 'voy')->textInput(['maxlength' => 20]) ?>


   <?=          
 /*  $form->field($model, 'idagen')->widget(Select2::classname(), [
  *  'data' => ArrayHelper::map(Tagen::find()->all(), 'id', 'namaagen'),
     'language' => 'en',
    'options' => ['placeholder' => 'Pilih agen pengangkut'],
    'pluginOptions' => [
        'allowClear' => true
  */
        $form->field($model, 'idagen')->dropDownList(
    ArrayHelper::map(Tagen::find()->all(), 'id', 'namaagen'),
  
    ['prompt'=> 'pilih negara pelabuhan asal']
   
    
);
?>
 
  
      <?=  $form->field($model, 'idpelasal')->dropDownList(
               ArrayHelper::map(Tnegpelabuhan::find()->all(), 'idpel', 'negarapelabuhan'),
              ['prompt'=> 'pilih negara pelabuhan asal']
               );?>            
  
    <?= $form->field($model, 'tglpeldatang')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    
         <?=  $form->field($model, 'idpeltujuan')->dropDownList(
               ArrayHelper::map(Tnegpelabuhan::find()->all(), 'idpel', 'negarapelabuhan'),
              ['prompt'=> 'pilih negara pelabuhan tujuan']
               );?>          
  
             <?= $form->field($model, 'tglpeltujuan')->widget(
            DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    <?= $form->field($model, 'jenisdokumen')->dropDownList([ 'PIB' => 'PIB', 'PEB' => 'PEB', 'BC11' => 'BC11', 'BC12' => 'BC12', 'BC13' => 'BC13', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenisbarang')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'berat')->textInput() ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'jumlahkemasan')->textInput() ?>

    <?= $form->field($model, 'volume')->textInput() ?>

    <?= $form->field($model, 'idchecking')->dropDownList([ 'ca' => 'Ca', 'cr' => 'Cr', 'cb' => 'Cb', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bc11')->textInput(['maxlength' => 20]) ?>

    
             <?= $form->field($model, 'tglbc11')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    <?= $form->field($model, 'daftarbekal')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'bc12')->textInput(['maxlength' => 20]) ?>

   
                 <?= $form->field($model, 'tglbc12')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    <?= $form->field($model, 'bc13')->textInput(['maxlength' => 20]) ?>

    
                     <?= $form->field($model, 'tglbc13')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    <?= $form->field($model, 'lhpsp')->textInput(['maxlength' => 150]) ?>

   
               <?=  $form->field($model, 'nippemeriksa')->dropDownList(
               ArrayHelper::map(Pegawai::find()->all(), 'nip', 'nama'),
              ['prompt'=> 'pilih NIP Pemeriksa']
               );?>    
    
    
          <?=  $form->field($model, 'nipatasan1')->dropDownList(
               ArrayHelper::map(Pegawai::find()->all(), 'nip', 'nama'),
              ['prompt'=> 'pilih NIP Atasan1']
               );?>      
    
   
      <?=  $form->field($model, 'nipatasan2')->dropDownList(
               ArrayHelper::map(Pegawai::find()->all(), 'nip', 'nama'),
              ['prompt'=> 'pilih NIP Atasan2']
               );?>  
  
    <?= $form->field($model, 'usercreated')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'idkantor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
