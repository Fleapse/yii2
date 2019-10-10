<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;



/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="foods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Foods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            [
                'attribute'=>'type_of_food',
                'label'=>'тип еды',
                'format'=>'text', // Возможные варианты: raw, html
                'value'=>'typeOfFood.name',
                'filter' =>\app\modules\admin\models\TypeOfFood::getList()
            ],
            'recipe:ntext',
            [
                'attribute'=>'date_time',
                'label'=>'Дата',
                'format'=>'datetime',


            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
