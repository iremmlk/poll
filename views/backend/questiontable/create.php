<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\poll\models\Questiontable */

$this->title = 'Create Questiontable';
$this->params['breadcrumbs'][] = ['label' => 'Questiontables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questiontable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
