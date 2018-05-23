<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\poll\models\Answertable */

$this->title = 'Create Answertable';
$this->params['breadcrumbs'][] = ['label' => 'Answertables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answertable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
