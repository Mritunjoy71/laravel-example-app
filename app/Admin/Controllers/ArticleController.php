<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\User;
use App\Models\Attachment;
use App\Admin\Selectable\Users;

use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('details', __('details'));
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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        //$show->field('details', __('details'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        //$show->column()->unserialize('xxx');

        $show->attachments('Attachments', function ($attachment) {
            $attachment->resource('/admin/attachments');
            $attachment->id();
            $attachment->content()->limit(10);
            $attachment->article_id();
            $attachment->path();
            $attachment->created_at();
            $attachment->updated_at();

            // $attachment->filter(function ($filter) {
            //     $filter->like('content');
            // });
        
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
        $form = new Form(new Article());

        $form->text('title', __('Title'));
        //$form->list('title', __('Title'));
        //$form->keyValue('title', __('Title'))->rules('required|min:5');
        $form->embeds('details', function ($form) {

            $form->text('key1')->rules('required');
            $form->email('key2')->rules('required');
            $form->datetime('key3');
        
            $form->dateRange('key4','key5','Range')->rules('required');
        });


        // $form->table('details', function ($table) {
        //     $table->text('key');
        //     $table->text('value');
        //     $table->text('desc');
        // });

        $form->multipleFile('attachments','Attachments')->pathColumn('path')->removable();
        //$form->select('author_id')->options(User::all()->pluck('name','id'));
        $form->belongsTo('author_id', Users::class,'Author');

        //$form->php('code');

       // $form->ckeditor('content');
        return $form;
    }
}
