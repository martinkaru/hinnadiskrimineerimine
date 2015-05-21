<?php

namespace app\models;

use app\models\base\Product as BaseProduct;
use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Product extends BaseProduct
{
    /**
     * Unique identifier
     * @var
     */
    public $id;
    /**
     * Name of the product or service
     * @var string
     */
    public $name;
    /**
     * @var string CategoryEnum
     */
    public $category;
    /**
     * @var int original price in cents
     */
    public $price;
    /**
     * @var int VAT percent
     */
    public $vatPercent;
    /**
     * @var int
     */
    public $amount;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'category', 'price', 'vatPercent', 'amount'], 'required'],
            [['vatPercent'], 'number'],
            [['price', 'amount'], 'number', 'min' => 1],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Unikaalne identifikaator',
            'name' => 'Nimetus',
            'category' => 'Kategooria',
            'price' => 'Hind',
            'vatPercent' => 'KM',
            'amount' => 'kogus',
        ];
    }
}
