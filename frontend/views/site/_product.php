<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <style>

        details > summary {
            padding: 2px;
            border: none;
            box-shadow: 1px 1px 2px #bbbbbb;
            cursor: pointer;
            font-size: 18px;
        }

        details > p {
            background-color: #eeeeee;
            padding: 4px;
            margin: 0;
            box-shadow: 1px 1px 2px #bbbbbb;
            font-size: 18px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            background-color: #E5E5EB;
        }



        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 24px;
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
                    <h2><?=$model->name?></h2>
                    <img src="admin/uploads/<?=$model->image?>" alt="" width="130" height="150"/>
                    <details>
                        <summary>More information...</summary>
                        <p><?=$model->description?></p>
                    </details>
                    <h2>€<?=$model->price?></h2>
                    <h5>Price is listed for one day!</h5>
                    <a href="/lapa/index.php?r=site%2Flogin">Login</a>
                <?php }else{ ?>
                    <h2><?=$model->name?></h2>
                    <img src="admin/uploads/<?=$model->image?>" alt="" width="130" height="150"/>
                    <details>
                        <summary>More information...</summary>
                        <p><?=$model->description?></p>
                    </details>
                    <h2>€<?=$model->price?></h2>
                    <h5>Price is listed for one day!</h5>
                    <form action="<?=Url::to('/lapa/index.php?r=site%2Fcart')?>" method="post">
                        <input name="pid" type="hidden" value="<?=$model->id?>">
                        <button class="btn btn-default"><i class="fa fa-shopping-cart"></i>Add to cart!</button>
                    </form>
                <?php } ?>
        </div>
</div>
