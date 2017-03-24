<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\SearchUserActivity;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchUserActivity */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Activities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'user_id',
            [
            'attribute' => 'date_created',
            'format' =>  ['date', 'd.m.Y'],
            ],
            'action',

            [   'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
            ],
        ],
    ]);

    ?>

</div>
