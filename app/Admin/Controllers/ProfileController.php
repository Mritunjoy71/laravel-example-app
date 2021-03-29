<?php

namespace App\Admin\Controllers;

use App\Models\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Profile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Profile());

        $grid->column('id', __('Id'));
        $grid->column('user_name', __('User name'));
        $grid->column('email', __('Email'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('company', __('Company'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
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
        $show = new Show(Profile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_name', __('User name'));
        $show->field('email', __('Email'));
        $show->field('avatar', __('Avatar'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('company', __('Company'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
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
        $form = new Form(new Profile());

        $form->tab('Basic info', function ($form) {

            $form->text('user_name');
            $form->email('email');
        
        })->tab('Profile', function ($form) {
        
           $form->image('avatar');
           $form->text('address');
           $form->mobile('phone');
        
        })->tab('Jobs', function ($form) {
        
            
            $form->text('company');
            $form->date('start_date');
            $form->date('end_date');
            
        
          });

        return $form;
    }
}
