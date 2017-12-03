<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CaraBayar */

$this->title = 'Create Cara Bayar';
$this->params['breadcrumbs'][] = ['label' => 'Cara Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-bayar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
