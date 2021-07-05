Bootstrap4 select widget for Yii2
=================================
Yii2 wrapper for boostrap4-select.

[![Latest Stable Version](https://poser.pugx.org/yiier/yii2-bootstrap4-select/v/stable)](https://packagist.org/packages/yiier/yii2-bootstrap4-select)
[![Total Downloads](https://poser.pugx.org/yiier/yii2-bootstrap4-select/downloads)](https://packagist.org/packages/yiier/yii2-bootstrap4-select)
[![Latest Unstable Version](https://poser.pugx.org/yiier/yii2-bootstrap4-select/v/unstable)](https://packagist.org/packages/yiier/yii2-bootstrap4-select)
[![License](https://poser.pugx.org/yiier/yii2-bootstrap4-select/license)](https://packagist.org/packages/yiier/yii2-bootstrap4-select)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiier/yii2-bootstrap4-select "*"
```

or add

```
"yiier/yii2-bootstrap4-select": "*"
```

to the require section of your `composer.json` file.

Demo
-----------

You can view demo and examples [here](https://developer.snapappointments.com/bootstrap-select/examples/).

Usage
--------------

```php
<?php
use yiier\bootstrap4\select\SelectPicker;


echo $form->field($model, 'attribute')->widget(SelectPicker::class, [
    'items' => ArrayHelper::map(User::find()->all(), 'id', 'email'),
    'options' => [
        'prompt' => '',
        'multiple' => true,
    ],  
    'clientOptions' => [
        'liveSearch' => true,
        'noneSelectedText' => '',
        'styleBase' => 'form-control',
        'style' => '',
    ],
    'clientEvents' => [],
]) ?>
```

Credits
--------

[romeyk/yii2-bootstrap-select](https://github.com/romeyk/yii2-bootstrap-select)