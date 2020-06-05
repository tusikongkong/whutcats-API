<?php

namespace App\Admin\Controllers;

use App\Bulletin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BulletinController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Bulletin';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Bulletin());

        $grid->column('id', __('Id'));
        $grid->column('text', __('内容'));
        $grid->column('color', __('字段颜色'));

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
        $show = new Show(Bulletin::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('text', __('Text'));
        $show->field('color', __('Color'));
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
        $form = new Form(new Bulletin());

        $form->text('text', __('Text'));
        $form->color('color', __('Color'));

        return $form;
    }
}
