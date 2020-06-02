<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }


        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.9;
        }
    </style>
</head>


<div class="col-sm-4">
        <div class="single-products">
            <div class="card">
                <?php if(yii::$app->user->isGuest) {?>
                    <h3><?=$model->name?></h3>
                    <img src="admin/uploads/<?=$model->image?>" alt="" width="130" height="150"/>
                    <h5>Price is listed for one day!</h5>
                    <h2>€<?=$model->price?></h2>
                    <form action="<?=Url::to('/lapa/index.php?r=site%2Flogin')?>" method="post">
                        <input name="pid" type="hidden" value="<?=$model->id?>">
                        <button class="btn btn-default add-to-cart"></i>Login!</button>
                    </form>
                <?php }else{ ?>
                    <h3><?=$model->name?></h3>
                    <img src="admin/uploads/<?=$model->image?>" alt="" width="130" height="150"/>
                    <h5>Price is listed for one day!</h5>
                    <h2>€<?=$model->price?></h2>
                    <form action="<?=Url::to('/lapa/index.php?r=site%2Fcart')?>" method="post">
                        <input name="pid" type="hidden" value="<?=$model->id?>">
                        <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart!</button>
                    </form>
                <?php } ?>
        </div>
</div>
