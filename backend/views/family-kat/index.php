<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FamilyKatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Family Kats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-kat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Family Kat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'family_kat_id',
            'family_kat_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
