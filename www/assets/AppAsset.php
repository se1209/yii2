<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/flat-form.css',
        'css/fancySelect.css',
        'css/jquery.fancybox.css',
        'css/responsive-tabs.css',
        'css/allinone_bannerRotator.css',
        'css/perfect-scrollbar.min.css',
        'css/styles.css',
        'css/font-awesome.min.css',
        'css/minimal-menu.css',
        //'css/minimal-menu-ie.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
