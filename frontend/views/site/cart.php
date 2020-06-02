<?php
use frontend\models\Products;
use yii\helpers\Url;
use yii\helpers\Html;

$sum = 0;
$i = 0;
?>

<section id="cart">
    <div class="container">
        <table class="table table-condensed">
            <thead>
                <tr class="card-title" style = 'font-weight:bold;'>
                    <td class="image">Image</td>
                    <td class="name">Name</td>
                    <td class="description">Description</td>
                    <td class="price">Price</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($test)) {
            foreach ($test as $key => $data) {
                    $product = Products::find()->where(['id'=> $data])->one();

                $sum += $product->price;
                ?>
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="admin/uploads/<?=$product->image?>" alt="" width="100" height="100"></a>
                    </td>
                    <td class="cart_name">
                        <h4><?=$product->name?></a></h4>
                    </td>
                    <td class="cart_description">
                        <p><?=$product->description?></p>
                    </td>
                    <td class="cart_price">
                        <p>€<?=$product->price?></p>
                    </td>
                    <td>
                        <?php
                        echo Html::a(
                            'Remove',
                            ['/site/cart', 'id' =>$key],
                            ['class' => 'btn btn-danger']
                        );
                        ?>

                    </td>
                </tr>
            <?php }
             } ?>
            <tr>
            <td class = 'text-right' colspan = '3' style = 'font-weight:bold;'>
                Total:
            </td>
            <td style = 'font-weight:bold;'>
            <?= '€'.$sum ?>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>