# yii2-cronjob-widget
------

**New Module Installation**

```
cd /path/to/yii2/instalation

composer require luisferparra/yii2-cronjob-widget

```

### Use with ActiveForm

```
<?php
use luisferparra\widgets\CronJob;
?>
<?php CronJob::widget([
    'model' => $model, 
    'attribute'=>'supplier',
    'options'=>$options //optional options
]); ?>
    
```

### Use with Form
```
<?php
use luisferparra\widgets\CronJob;
?>
<?php CronJob::widget([
    'name' => $model, 
    'options'=>$options //optional options
]); ?>
    
```

### Based On

This widget is based on another widget whose texts are in Italian. I have only made the adaptation of these texts to English necessary for my project. It is not Multilanguage

[https://github.com/SharKom/yii2-cron](https://github.com/SharKom/yii2-cronjob-widget)


