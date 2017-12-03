<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FamilyKat */

$this->title = 'Update Family Kat: ' . $model->family_kat_id;
$this->params['breadcrumbs'][] = ['label' => 'Family Kats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->family_kat_id, 'url' => ['view', 'id' => $model->family_kat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="family-kat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
