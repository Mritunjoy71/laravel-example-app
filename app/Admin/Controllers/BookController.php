<?php

namespace App\Admin\Controllers;

use App\Models\Book;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use Illuminate\Support\Str;

class BookController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Book';
    protected $status=1;

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Book());

        $grid->column('id', __('Id'));
        $grid->column('title')->display(function ($title, $column) {
    
            // If the value of the status field of this column is equal to 1, directly display the title field
            If ($this->status == 1) {
                return $title;
            }
            
            // Otherwise it is displayed as editable
            return $column->editable();
        });

        $grid->column('author', __('Author'))->color('#ccc');
        $grid->column('author_address', __('Author address'))->color('#008000')->popover('right');
        $grid->column('ISBN', __('ISBN'));
        $grid->column('is_published', __('Is published'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->paginate(10);
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
        $show = new Show(Book::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('author', __('Author'));
        $show->field('author_address', __('Author address'));
        $show->field('ISBN', __('ISBN'));
        $show->field('is_published', __('Is published'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }


    public function users(Request $request)
    {
        $q = $request->get('q');

        return User::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
    public function city(Request $request)
    {
        $provinceId = $request->get('q');

        return ChinaArea::city()->where('parent_id', $provinceId)->get(['id', DB::raw('name as text')]);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Book());
        $form->text('title', __('Title'));
        //$form->text('title', __('Title'))->rules('required|min:5')->icon('fa-pencil');
        //$form->radio('title','Title')->options(['m' => 'Female', 'f'=> 'Male'])->default('m');
        //$form->checkbox('title','Title')->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name']);
        //$form->checkbox('title','Title')->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name'])->stacked();
        // $form->checkbox('title','Title')->options(function () {
        //     return [1 => 'foo', 2 => 'bar', 'val' => 'Option name'];
        // });
        // $form->checkbox('title','Title')->options([])->canCheckAll();
        //$form->select('title','Title')->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name']);
        //$form->html('title');
        //$form->tags('keywords');
        $form->text('author', __('Author'));
        //$form->map('author', 'author', 'author')->useGoogleMap();
        // $form->select('author')->options(function ($id) {
        //     $user = User::find($id);
        
        //     if ($user) {
        //         return [$user->id => $user->name];
        //     }
        // })->ajax('/admin/api/users');

       // $form->select('province')->options()->load('city', '/api/city');

        //$form->select('city');

        //$form->multipleSelect('author','Author')->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name']);
        //$form->listbox('author','Author')->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name'])->height(200);
        //$form->ip('author','Author');
        //$form->color('author','Author')->default('#ccc');
        //$form->time('author','Author')->format('HH:mm:ss');
        //$form->date('author','Author')->format('YYYY-MM-DD');
        //$form->datetime('author','Author')->format('YYYY-MM-DD HH:mm:ss');
        //$form->dateRange('author','Author', 'author');
        //$form->currency('author','Author')->symbol('$');
        //$form->timezone('author');
        $form->textarea('author_address', __('Author address'))->rows(10);
        //$form->number('ISBN', __('ISBN'));
        $form->hidden('ISBN');
        //$form->number('ISBN','ISBN')->max(100);
        //$form->rate('ISBN','ISBN');
        //$form->slider('ISBN','ISBN')->options(['max' => 100, 'min' => 1, 'step' => 1, 'postfix' => 'years old']);
        
        $states = [
            'on'  => ['value' => 1, 'text' => 'enable', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'disable', 'color' => 'danger'],
        ];
        
        //$form->switch('is_published','is_published')->states($states);
        $form->switch('is_published', __('Is published'));

        return $form;
    }
}
