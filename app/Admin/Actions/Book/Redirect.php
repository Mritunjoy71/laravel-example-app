<?php

namespace App\Admin\Actions\Book;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Redirect extends RowAction
{
    public $name = 'redirect';

    public function href()
    {
        return "/admin";
    }

}