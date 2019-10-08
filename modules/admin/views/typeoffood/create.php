<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TypeOfFood */

$this->title = 'Create Type Of Food';
$this->params['breadcrumbs'][] = ['label' => 'Type Of Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-of-food-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
