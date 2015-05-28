<?php
/**
 * @link https://github.com/timurmelnikov/yii2-showloading
 * @copyright Copyright (c) 2015 Timur Melnikov
 * @license MIT
 */

namespace timurmelnikov\widgets;

use yii\web\AssetBundle;

/**
 * @author Timur Melnikov <melnilovt@gmail.com>
 */
class ShowLoadingAsset extends AssetBundle
{
    public $sourcePath = '@vendor/timurmelnikov/yii2-showloading/assets';


    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        $this->js[] = YII_DEBUG ? 'js/jquery.showLoading.js' : 'js/jquery.showLoading.min.js';
    }
}
