<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evidences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evidences-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Evidences', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'time',
            'request_id',
            'counter_name',
            'counter_id',
            // 'counter_num',
            // 'service_id',
            // 'value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
