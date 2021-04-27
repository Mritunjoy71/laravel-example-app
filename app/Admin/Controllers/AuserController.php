<?php

namespace App\Admin\Controllers;

use App\Models\Auser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use App\Models\Arole;

class AuserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Auser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Auser());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Auser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
       

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Auser());

        $form->text('name', __('Name'));
        $form->checkbox('aroles','arole')->options(Arole::all()->pluck('name','id'));
        //$form->multipleSelect('aroles','Arole')->options(Arole::all()->pluck('name','id'));

        return $form;
    }
}
