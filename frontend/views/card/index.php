<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Card', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'status',
            //'created_at',
            //'updated_at',
            'name',
            // 'image',
            'description:ntext',
            // 'category',
            'triggeringRollMin',
            'triggeringRollMax',
            // 'triggersOn',
            'cost',
            // 'effect',
            // 'effectFrom',
            // 'effectValue',
            // 'effectMultiplier',
            // 'effectMultiplierCategory',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
