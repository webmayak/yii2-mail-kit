<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/19/18
 * Time: 3:19 PM
 */

namespace pantera\mail;

use Yii;

class Module extends \yii\base\Module
{
    /* @var array Массив ролей которым доступна админка */
    public $permissions = ['@'];

    public function getMenuItems()
    {
        return [
            [
                'label' => 'E-mail',
                'url' => '#',
                'icon' => 'envelope',
                'items' => [
                    ['label' => Yii::t('mail', 'Mail Templates'), 'url' => ['/mail/template/index']],
                ]
            ]
        ];
    }
}
