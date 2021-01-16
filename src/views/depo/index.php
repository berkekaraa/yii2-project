<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\DepoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Depos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Depo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
