Yii2-Word-Count-Widget
======================
Display a word or character count, including or excluding spaces for any field

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require cics/yii2-word-count-widget:dev-master
```

or add

```
"cics/yii2-word-count-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \cics\widgets\WordCount::widget(); ?>
```