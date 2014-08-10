<?php

/**
 * @copyright Copyright &copy; Caleb Crosby, cicsolutions.com 2014
 * @package yii2-word-count-widget
 * @version 1.0.0
 */

namespace cics\widgets;

/**
 * Asset bundle for WordCount Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class WordCountAsset extends AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['wordcount']);
        $this->setupAssets('js', ['jquery.textareaCounter.plugin']);
        parent::init();
    }
}
