<?php

namespace App\Admin\Controllers;

use App\Models\School;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SchoolController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'School';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new School());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('address', __('Address'));
        $grid->column('post_code', __('Post code'));
        $grid->column('website', __('Website'));
        $grid->column('contact_email', __('Contact email'));
        $grid->column('contact_number', __('Contact number'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(School::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('post_code', __('Post code'));
        $show->field('website', __('Website'));
        $show->field('contact_email', __('Contact email'));
        $show->field('contact_number', __('Contact number'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new School());

        $form->text('name', __('Name'));
        $form->textarea('address', __('Address'));
        $form->number('post_code', __('Post code'));
        $form->text('website', __('Website'));
        $form->text('contact_email', __('Contact email'));
        $form->text('contact_number', __('Contact number'));

        return $form;
    }
}
