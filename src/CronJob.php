<?php
namespace luisferparra\widgets;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\widgets\InputWidget;
use luisferparra\widgets\CronJobAsset;
use yii\bootstrap\Modal;

class CronJob extends InputWidget
{
    var $options=[];
    var $label="";

    public function init()
    {
        parent::init();
        if(isset($this->options["class"])) {
            $this->options["class"]="form-control cronjob-widget ".$this->options["class"];
        } else {
            $this->options["class"]="form-control cronjob-widget";
        }

        if(!isset($this->options["placeholder"])) {
            if ($this->hasModel()) {
                $this->options["placeholder"]=$this->attribute;
            } else {
                $this->options["placeholder"]=$this->name;
            }
        }


        if($this->label==""){
            $this->label=='name';
        }

    }

    public function run()
    {
        if ($this->hasModel()) {
            $fgclass="field-".$this->getModelName($this->model)."-".$this->attribute;
            $field = "<div class='form-group $fgclass'>".Html::activeLabel($this->model, $this->attribute).Html::activeTextInput($this->model, $this->attribute, $this->options)."<div class='help-block'></div></div>";
        } else {
            $field = "<div class='form-group'>".Html::label($this->label).Html::textInput($this->name, $this->value, $this->options)."<div class='help-block'></div> </div>";
        }
        $view = $this->getView();

        CronJobAsset::register($view);
        $modal=$this->renderModal();

        return $field.$modal;
    }

    public function renderModal(){
        ob_start();
        Modal::begin([
            'header' => '<h3>Schedule CronJob</h3>',
            'id'=>'cronjob-modal',
            'footer' => '<div class="form-group">
                            <button type="button" class="btn btn-success close-cronjob">Accept</button> 
                         </div>'
        ]);

        echo "<div id='crongen'></div>";


        Modal::end();
        $modal=ob_get_clean();
        return $modal;
    }

    public function getModelName($model) {
        $modelClass=get_class($model);
        $exploded=explode('\\', $modelClass);
        $modelname=strtolower(end($exploded));
        return $modelname;
    }
}
