<?php

namespace cics\widgets;

class WordCount extends \yii\base\Widget
{

	public $container_id = null;

    public function run()
    {
    	$wordcount = 'hey, heay, hay';
        return Html::encode($wordcount);
    }
}
