<?php

namespace sharkom\widgets;
use yii\web\AssetBundle;

class CronJobAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sharkom/yii2-cronjob-widget/src/js';
    public $css = [
        'jquery-cron.css',
    ];

    public $js = [
        'jquery-cron.js',
        'cronjob.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        parent::init();
        $this->publishOptions['forceCopy'] = true;
    }
}