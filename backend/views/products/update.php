<?php

use yii\helpers\Html;
use yii\widgets\activeForm;

/* @var $this yii\web\View */
/* @var $model backend\models\products */

$this->title = 'Update Products: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avalibility')->dropDownList([1=>'Pieejams', 0=>'Nepieejams']) ?>

    <?= $form->field($model, 'type')->dropDownList([1=>'Baļļas',
        2=>'Nojumes',3=>'Galdi',4=>'Galda piederumi',5=>'Krēsli',6=>'Grilli'], ['prompt' => 'Select Item']
    ) ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
