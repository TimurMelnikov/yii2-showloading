<?php

/**
 * @link https://github.com/timurmelnikov/yii2-showloading
 * @copyright Copyright (c) 2015 Timur Melnikov
 * @license MIT
 */

namespace timurmelnikov\widgets;

use Yii;
use yii\base\Widget;

/**
 * @author Timur Melnikov <melnilovt@gmail.com>
 */
class ShowLoading extends Widget {

    public $loadingType = 1;

    public function init() {

        $view = $this->getView();
        $bundle = ShowLoadingAsset::register($view);


        if ($this->loadingType == 1) {

            $css = <<<CSS
 .loading-indicator {
	height: 80px;
	width: 80px;
	background: url( '$bundle->baseUrl/images/loading1.gif' );
	background-repeat: no-repeat;
	background-position: center center;
}
.loading-indicator-overlay {
	background-color: #FFFFFF;
	opacity: 0.6;
	filter: alpha(opacity = 60);
}               
CSS;
            Yii::$app->view->registerCss($css);
        }

        if ($this->loadingType == 2) {
            $css = <<<CSS
 .loading-indicator {
	height: 80px;
	width: 80px;
	background: url( '$bundle->baseUrl/images/loading2.gif' );
	background-repeat: no-repeat;
	background-position: center center;
}
.loading-indicator-overlay {
	background-color: #FFFFFF;
	opacity: 0.6;
	filter: alpha(opacity = 60);
}               
CSS;
            Yii::$app->view->registerCss($css);
        }

        if ($this->loadingType == 3) {
            $css = <<<CSS
 .loading-indicator {
	height: 80px;
	width: 80px;
	background: url( '$bundle->baseUrl/images/loading3.gif' );
	background-repeat: no-repeat;
	background-position: center center;
}
.loading-indicator-overlay {
	background-color: #FFFFFF;
	opacity: 0.6;
	filter: alpha(opacity = 60);
}               
CSS;
            Yii::$app->view->registerCss($css);
        }
        if ($this->loadingType == 4) {
            $css = <<<CSS
 .loading-indicator {
	height: 80px;
	width: 80px;
	background: url( '$bundle->baseUrl/images/loading4.gif' );
	background-repeat: no-repeat;
	background-position: center center;
}
.loading-indicator-overlay {
	background-color: #FFFFFF;
	opacity: 0.6;
	filter: alpha(opacity = 60);
}               
CSS;
            Yii::$app->view->registerCss($css);
        }

        if ($this->loadingType == 5) {
            $css = <<<CSS
 .loading-indicator {
	height: 80px;
	width: 80px;
	background: url( '$bundle->baseUrl/images/loading5.gif' );
	background-repeat: no-repeat;
	background-position: center center;
}
.loading-indicator-overlay {
	background-color: #FFFFFF;
	opacity: 0.6;
	filter: alpha(opacity = 60);
}               
CSS;
            Yii::$app->view->registerCss($css);
        }
    }

}
