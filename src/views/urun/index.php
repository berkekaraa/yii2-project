<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel berkekaraa\project\models\UrunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urun';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun-index">
    <?php echo $this->render('_search',['model'=>$searchModel,'data'=> $data]);?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Urun Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php foreach($model as $row){ ?>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" style="border:1px solid #021a40;">
            <div class="product-image-wrapper-bar" style="margin-bottom: 10px">
                <div class="single-products">
                    <div class="productinfo text-center" style="margin-bottom: 10px; margin-top: 20px;">
                        <p style="font-size:30px"><?= $row->isim; ?> </p>
                        <h3><?= number_format($row->fiyat,0,",","." )?>TL</h3>
                        <?= Html::a('Sepete Ekle',['add-to-car','id'=>$row->id],['class'=>'btn btn-success','style'=>'margin:10px'])?>
                        <?= Html::a('Detaylar Gor',['view','id'=>$row->id,'isim'=>$row->isim],['class'=>'btn btn-warning'])?>
                       
                    </div>
                </div>
            </div>
        </div>

    <?php }  ?>

    <div style="margin-top: 430px"">
        <?= LinkPager::widget([
            'pagination' =>$pagination,   //sayfa geçişi sağladı bize
        ]) ?>
    </div>

</div>
