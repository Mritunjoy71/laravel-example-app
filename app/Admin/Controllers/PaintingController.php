<?php

namespace App\Admin\Controllers;

use App\Models\Painting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PaintingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Painting';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Painting());

        $grid->column('id', __('Id'));
        $grid->column('painter_id', __('Painter id'));
        $grid->column('title', __('Title'));
        $grid->column('body', __('Body'));
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
        $show = new Show(Painting::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('painter_id', __('Painter id'));
        $show->field('title', __('Title'));
        $show->field('body', __('Body'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->painter('Painter information', function ($painter) {

            $painter->setResource('/admin/painters');
        
            $painter->id();
            $painter->username();
            $painter->bio();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Painting());

        $form->number('painter_id', __('Painter id'));
        $form->text('title', __('Title'));
        $form->textarea('body', __('Body'));

        return $form;
    }
}
