<?php

namespace cics\widgets;

use yii\helpers\Html;

class WordCount extends \yii\base\Widget
{

	public $container_id = null;

    public function run()
    {
    	$wordcount = 'hey, heay, hay';
        return Html::encode($wordcount);
    }
}
