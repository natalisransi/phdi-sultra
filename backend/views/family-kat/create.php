<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FamilyKat */

$this->title = 'Create Family Kat';
$this->params['breadcrumbs'][] = ['label' => 'Family Kats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-kat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
