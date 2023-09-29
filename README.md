# yii2-cronjob-widget
------

**New Module Installation**

```
cd /path/to/yii2/instalation

composer require sharkom/yii2-cronjob-widget

```

### Use with ActiveForm

```
<?php
use sharkom\widgets\CronJob;
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
use sharkom\widgets\CronJob;
?>
<?php CronJob::widget([
    'name' => $model, 
    'options'=>$options //optional options
]); ?>
    
```






