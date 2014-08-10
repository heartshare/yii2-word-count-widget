<?php

namespace cics\widgets;

use yii\helpers\Html;

class WordCount extends \yii\base\Widget
{

	public $container_id = null;

    public function run()
    {

	    // include embed class
		include_once('@vendor/cics/yii2-word-count-widget/assets/wordcount.js');

    	$wordcount = 'hey, heay, hay';
        return Html::encode($wordcount);
    }
}
