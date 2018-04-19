<?php
use kouosl\theme\widgets\GridView;
use kouosl\theme\helpers\Html;

$this -> title = 'Content Manage';
$data['title'] = $this -> title;
$this -> params ['breacrumbs'][] = $this-> title;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
            'id' ,
            'title',
            'description' ,
            'picture' ,
            'body' ,
            'created_at' ,
            'created_by' ,
            'updated_at' ,
            'updated_by',
            'category_id',
            'category'
    ]
]);

