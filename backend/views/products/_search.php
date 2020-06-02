<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\productsSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?php // $form->field($model, 'user_email') ?>

    <?php // $form->field($model, 'name') ?>

    <?php // $form->field($model, 'description') ?>

    <?php // $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'avalibility') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
