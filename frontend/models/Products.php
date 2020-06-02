<?php

namespace frontend\models;

use Yii;


/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $user_email
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $avalibility
 * @property string $type
 * @property int $stock
 * @property string $image
 * @property string $created_at
 */
class Products extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price', 'avalibility', 'type', 'stock', 'image'], 'required','skipOnEmpty'=>false],
            [['description'], 'string'],
            [['stock'], 'integer'],
            [['created_at','user_email'], 'safe'],
            [['user_email', 'avalibility', 'type'], 'string', 'max' => 100],
            [['name', 'image'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 50],
            [['image'], 'file','extensions'=>'jpg,png,gif','skipOnEmpty'=>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_email' => 'User Email',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'avalibility' => 'Avalibility',
            'type' => 'Type',
            'stock' => 'Stock',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }
}
