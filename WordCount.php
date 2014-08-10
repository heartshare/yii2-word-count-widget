<?php

/**
 * @copyright Copyright &copy; Caleb Crosby, cicsolutions.com 2014
 * @package yii2-word-count-widget
 * @version 1.0.0
 */

namespace cics\widgets;

/**
 * WordCount Widget
 *
 * @author Caleb Crosby <calebic3@gmail.com>
 * @since 2.0
 */

class WordCount extends \yii\base\Widget
{
	public $selector_class 		= '.countable';
	public $selector 			= null;
	public $max_characters		= 0;
	public $message_format		= '#input/#max Characters | #words Words'; // {input}, {max}, {remaining}, {words}
	public $default_class		= 'character-counter';
	public $warning_class 		= 'counter-warning';
	public $warning_threshold 	= 5;

	public function init()
	{
        $this->registerAssets();

        // set selector to either be the passed selector, the passed selector class or the default selector class
        $this->selector = !empty($this->selector) ? $this->selector : $this->selector_class;
	}

    public function run()
    {

		$view = $this->getView();
		$view->registerJs("

			// should put a length check first and alert the selector passed if it's not found

			$('" . $this->selector . "').each(function(index) {
				var options = {
					'maxCharacterSize': " 	. $this->max_characters 	. ",
					'displayFormat': '" 	. $this->message_format 	. "',
					'originalStyle': '" 	. $this->default_class 		. "',
					'warningStyle': '" 		. $this->warning_class 		. "',
					'warningNumber': " 		. $this->warning_threshold 	. ",
				};

				$(this).textareaCount(options);
			});

		", $view::POS_END, 'word-count-' . $this->selector);

    }

    public function registerAssets()
    {
        $view = $this->getView();
        WordCountAsset::register($view);
    }
}
