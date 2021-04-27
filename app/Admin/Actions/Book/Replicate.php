<?php

namespace App\Admin\Actions\Book;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Replicate extends RowAction
{
    public $name = 'copy';

    public function handle(Model $model)
    {
        

        // Your reporting logic...
        return $this->response()->success('Success message.')->refresh();
    }

    public function dialog()
    {
        $this->confirm('Are you sure to copy this row?');
    }

    // public function form()
    // {
    //     $type = [
    //         1 => 'Advertising',
    //         2 => 'Illegal',
    //         3 => 'Fishing',
    //     ];
        
    //     $this->checkbox('type', 'type')->options($type);
    //     $this->textarea('reason', 'reason')->rules('required');
    // }

}