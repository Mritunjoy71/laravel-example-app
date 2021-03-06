<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Encore\Admin\Form::forget(['map', 'editor']);

use Encore\Admin\Grid\Column;

Column::extend('color', function ($value, $color) {
    return "<span style='color: $color'>$value</span>";
});

use App\Admin\Extensions\Popover;
Column::extend('popover', Popover::class);

use App\Admin\Extensions\PHPEditor;
use Encore\Admin\Form;

Form::extend('php', PHPEditor::class);

use App\Admin\Extensions\Form\CKEditor;

Form::extend('ckeditor', CKEditor::class);


use Encore\Admin\Show;
use App\Admin\Extensions\Show\UnSerialize;

Show::extend('unserialize', UnSerialize::class);