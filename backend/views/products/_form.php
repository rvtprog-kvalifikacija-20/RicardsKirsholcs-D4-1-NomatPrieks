<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avalibility')->dropDownList([1=>'Pieejams', 0=>'Nepieejams']) ?>

    <?= $form->field($model, 'type')->dropDownList([0=>'Izvēlaties produkta tipu...',1=>'Baļļas',
    2=>'Nojumes',3=>'Galdi',4=>'Galda piederumi',5=>'Krēsli',6=>'Grilli']) ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
