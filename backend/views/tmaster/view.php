<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tmaster */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmaster-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nolphsp',
            'tgllhpsp',
            'idKapal',
            'voy',
            'idagen',
            'idpelasal',
            'tglpeldatang',
            'idpeltujuan',
            'tglpeltujuan',
            'jenisdokumen',
            'jenisbarang',
            'berat',
            'satuan',
            'jumlahkemasan',
            'volume',
            'idchecking',
            'bc11',
            'tglbc11',
            'daftarbekal',
            'bc12',
            'tglbc12',
            'bc13',
            'tglbc13',
            'lhpsp',
            'nippemeriksa',
            'nipatasan1',
            'nipatasan2',
            'datecreated',
            'usercreated',
            'idkantor',
        ],
    ]) ?>

</div>
