<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TmasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmaster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tmaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'nolphsp',
            'tgllhpsp',
            'idkapal',
                  
           // [
           // 'attribute'=>'idkapal',
           // 'value'=>'idKapal0.kapal_name',
          //  ],       
            'voy',
            // 'idagen',
            // 'idpelasal',
            // 'tglpeldatang',
            // 'idpeltujuan',
            // 'tglpeltujuan',
            // 'jenisdokumen',
            // 'jenisbarang',
            // 'berat',
            // 'satuan',
            // 'jumlahkemasan',
            // 'volume',
            // 'idchecking',
            // 'bc11',
            // 'tglbc11',
            // 'daftarbekal',
            // 'bc12',
            // 'tglbc12',
            // 'bc13',
            // 'tglbc13',
            // 'lhpsp',
            // 'nippemeriksa',
            // 'nipatasan1',
            // 'nipatasan2',
            // 'datecreated',
            // 'usercreated',
            // 'idkantor',
            
             ['class' => 'yii\grid\ActionColumn',
                'template' => '{cetak}',
                'buttons' => [
                    'cetak' => function($url, $model){
                   return  Html::a('CETAK LHPSP', ['cetak-word','id'=>$model->id], ['class'=>'btn btn-warning']);
                    }
                ]
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
