<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\grid\GridView; ?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <?= GridView::widget([
            'dataProvider' => $books,
            'columns' => [
                'id',
                'title',
                'description:ntext',
                'genre',
            ],
        ]); ?>

        <?= GridView::widget([
            'dataProvider' => $authors,
            'columns' => [
                'id',
                'first_nam',
                'last_name',
//                'genre',
                'created_at',
            ],
        ]); ?>
    </div>
</div>
