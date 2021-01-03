<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model berkekaraa\project\models\Calisan */

$this->title = 'Update Calisan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Calisans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calisan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>