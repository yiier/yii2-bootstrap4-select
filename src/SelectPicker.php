<?php
/**
 * @link https://github.com/yiier/yii2-bootstrap4-select
 * @copyright Copyright (c) 2021 forecho
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace yiier\bootstrap4\select;

use yii\bootstrap4\InputWidget;
use yii\helpers\Html;

class SelectPicker extends InputWidget
{
    /**
     * @var string the template to render the input.
     */
    public $template = '{input}';

    /**
     * @var array the HTML attributes for the input tag.
     */
    public $options = [
        'class' => 'form-control',
    ];

    /**
     * @var array the option data items.
     */
    public $items;

    /**
     * Renders field
     */
    public function run()
    {
        $this->registerPlugin('selectpicker');

        return strtr($this->template, [
            '{input}' => $this->hasModel()
                ? Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options)
                : Html::dropDownList($this->name, $this->value, $this->options),
        ]);
    }

    /**
     * @inheritDoc
     */
    protected function registerPlugin($name)
    {
        SelectPickerAsset::register($this->view);
        parent::registerPlugin($name);
    }
}