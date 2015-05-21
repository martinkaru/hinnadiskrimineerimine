<?php

namespace app\models\base;

use Yii;
use yii\base\Model;

/**
 * AbstractModel basic persistence alternative base class
 */
class AbstractModel extends Model
{
    protected static $items = [];

    /**
     * @inheritdoc
     */
    public static function findById($id, $safe = false)
    {
        if (isset(self::$items[$id])) {
            return new static(self::$items[$id]);
        } elseif ($safe) {
            throw new \RuntimeException('Unknown ID ' . $id);
        }
        return null;
    }

}
