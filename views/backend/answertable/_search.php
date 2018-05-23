<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\poll\models\AnswertableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="answertable-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'answer_id') ?>

    <?= $form->field($model, 'answer_1') ?>

    <?= $form->field($model, 'answer_2') ?>

    <?= $form->field($model, 'answer_3') ?>

    <?php // echo $form->field($model, 'answer_4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
