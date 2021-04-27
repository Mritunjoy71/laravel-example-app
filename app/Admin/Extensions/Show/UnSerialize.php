<?php

namespace App\Admin\Extensions\Show;

use Encore\Admin\Show\AbstractField;

class UnSerialize extends AbstractField
{
    public function render($arg = '')
    {
        // return any content that can be rendered
        return unserialize($this->value);
    }
}