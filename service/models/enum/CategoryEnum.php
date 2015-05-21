<?php
/**
 * @author Martin Karu <martin@opus.ee>
 * @date 20.05.2015
 */

namespace app\models\enum;
use opus\enum\AbstractEnum;

/**
 * Category enumeration types
 *
 * @author Martin Karu <martin@opus.ee>
 * @package netiarst\enum
 */
class Category extends AbstractEnum
{
    // väike toode“, „suur toode“, „veebi toode“ ja „teenus“.
    const SMALL_PRODUCT = 'BANK_SEB';
    const LARGE_PRODUCT = 'BANK_SEB';
    const ONLINE_PRODUCT = 'BANK_SEB';
    const SERVICE = 'BANK_SWEDBANK';

    /**
     * @return array
     */
    public static function getListLabels()
    {
        return [
            self::BANK_SEB => \Yii::t('commom.payment', 'SEB'),
            self::BANK_SWEDBANK => \Yii::t('common.payment', 'Swedbank'),
            self::BANK_LHV => \Yii::t('common.payment', 'LHV'),
            self::BANK_NORDEA => \Yii::t('common.payment', 'Nordea'),
            self::VOUCHER => \Yii::t('common.payment', 'Voucher'),
            self::MAKSEKESKUS => \Yii::t('common.payment', 'Maksekeskus'),
        ];
    }

    /**
     * Returns the list label value
     *
     * @param string $constant
     * @return string
     */
    public static function getLabel($constant)
    {
        $labels = self::getListLabels();
        return
            isset($labels[$constant])
                ? $labels[$constant]
                : parent::getLabel($constant);
    }
}
