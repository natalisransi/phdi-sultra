<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bayar */

$this->title = 'Create Bayar';
$this->params['breadcrumbs'][] = ['label' => 'Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
