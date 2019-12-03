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
        'css/all.css',
        'css/animate.css',
        'css/aos.css',
        'css/bootstrap.min.css',
        'css/flaticon.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/owl.carousel.min.css',
        'css/progress.css',
        'css/slick.css',
        'css/style.css',
        'css/swiper.min.css',
        'css/themify-icons.css',

    ];
    public $js = [
            'js/jquery-1.12.1.min.js',
            'js/popper.min.js',
            'js/bootstrap.min.js',
            'js/jquery.magnific-popup.js',
            'js/swiper.min.js',
            'js/wow.min.js',
            'js/jquery.smooth-scroll.min.js',
            'js/masonry.pkgd.js',
            'js/owl.carousel.min.js',
            'js/jquery.nice-select.min.js',
            'js/slick.min.js',
            'js/jquery.counterup.min.js',
            'js/waypoints.min.js',
            'js/countdown.jquery.min.js',
            'js/timer.js',
            'js/jquery.ajaxchimp.min.js',
            'js/jquery.form.js',
            'js/jquery.validate.min.js',
            'js/mail-script.js',
            'js/contact.js',
            'js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
