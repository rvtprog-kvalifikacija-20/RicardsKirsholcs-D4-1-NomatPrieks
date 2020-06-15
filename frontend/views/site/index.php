<?php
use yii\widgets\LinkPager;
use yii\grid\ListView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'NomātPrieks!';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {text-align: center;}


        }
        .topnav .search-container {
            float: right;
        }
        input[type=text] {
            /* width: 130px; */
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url();
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 100%;
        }
        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 2px;
            margin-right: 16px;
            background: gray;
            font-size: 18px;
            border: 2px;
            cursor: pointer;
        }
    </style>
</head>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<h1 class="topnav">We are offering:</h1>

<div class="topnav">
    <div class="flex-column">

        <?php
        echo \yii\widgets\ListView::widget([
            'dataProvider'=>$products,
            'layout'=>"<div class\"items\">{items}</div>",
            'itemView'=>'_product',
        ])
        ?>
    </div>
</div>


