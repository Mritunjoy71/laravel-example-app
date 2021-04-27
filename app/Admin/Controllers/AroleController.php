<?php

namespace App\Admin\Controllers;

use App\Models\Arole;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use App\Models\Auser;
class AroleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Arole';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Arole());

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
        $show = new Show(Arole::findOrFail($id));

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
        $form = new Form(new Arole());

        $form->text('name', __('Name'));

        $form->multipleSelect('ausers','Auser')->options(Auser::all()->pluck('name','id'));
        return $form;
    }
}
