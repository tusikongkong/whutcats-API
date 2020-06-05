<?php

namespace App\Admin\Controllers;

use App\About;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'About';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new About());

        $grid->column('id', __('Id'));
        $grid->column('name', __('名字'));
        $grid->column('wanttosay', __('留言1'));
        $grid->column('wanttwo', __('留言2'));

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
        $show = new Show(About::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('wanttosay', __('Wanttosay'));
        $show->field('wanttwo', __('Wanttwo'));
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
        $form = new Form(new About());

        $form->text('name', __('Name'));
        $form->text('wanttosay', __('Wanttosay'));
        $form->text('wanttwo',__('Wanttwo'));

        return $form;
    }
}
