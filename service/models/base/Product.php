<?php

namespace app\models\base;

use Yii;
use yii\base\Model;

/**
 * Product is the basic persistence model for products and services
 */
class Product extends AbstractModel
{
    protected static $items = [
        // 'name', 'category', 'price', 'vatPercent', 'amount'], 'required'
        '100' => [
            'id' => '100',
            'name' => 'Toode1',
            'category' => 'Kate',
            'price' => 'test100key',
            'vatPercent' => '100-token',
            'amount' => 0,
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

}
