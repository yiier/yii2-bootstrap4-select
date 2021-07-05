<?php
/**
 * @link https://github.com/yiier/yii2-bootstrap4-select
 * @copyright Copyright (c) 2021 forecho
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace yiier\bootstrap4\select;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class SelectPickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-select/dist';
    public $js = [
        'js/bootstrap-select.min.js',
    ];
    public $css = [
        'css/bootstrap-select.min.css',
    ];

    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class
    ];
}