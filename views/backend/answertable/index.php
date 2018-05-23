<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\poll\models\AnswertableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Answertables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answertable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Answertable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'answer_id',
            'answer_1:ntext',
            'answer_2:ntext',
            'answer_3:ntext',
            //'answer_4:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
