<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\poll\models\Answertable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="answertable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'answer_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_4')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
