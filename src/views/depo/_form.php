<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Depo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
