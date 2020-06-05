<?php

namespace App\Admin\Controllers;

use App\Cat;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CatController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cat';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cat());

        $grid->column('id', __('Id'));
        $grid->column('name', __('昵称'));
        $grid->column('sex', __('性别'));
        $grid->column('sterilization', __('绝育情况'));
        $grid->column('deworming', __('驱虫情况'));
        $grid->column('vaccine', __('疫苗情况'));
        $grid->column('introduction', __('介绍'));
        $grid->column('shortintro', __('简介'));
        $grid->column('charactor', __('性格'));
        $grid->column('show', __('毛色外貌'));
        $grid->column('campus', __('所在校区'));
        $grid->column('pic', __('展示图'));
        $grid->column('head', __('头像'));

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
        $show = new Show(Cat::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('sex', __('Sex'));
        $show->field('sterilization', __('Sterilization'));
        $show->field('deworming', __('Deworming'));
        $show->field('vaccine', __('Vaccine'));
        $show->field('introduction', __('Introduction'));
        $show->field('shortintro', __('Shortintro'));
        $show->field('charactor', __('Charactor'));
        $show->field('show', __('Show'));
        $show->field('campus', __('Campus'));
        $show->field('pic', __('Pic'));
        $show->field('head', __('Head'));
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
        $form = new Form(new Cat());

        $form->text('name', __('Name'));
        $form->text('sex', __('Sex'));
        $form->text('sterilization', __('Sterilization'));
        $form->text('deworming', __('Deworming'));
        $form->text('vaccine', __('Vaccine'));
        $form->text('introduction', __('Introduction'));
        $form->text('shortintro', __('Shortintro'));
        $form->text('charactor', __('Charactor'));
        $form->text('show', __('Show'));
        $form->text('campus', __('Campus'));
        $form->image('pic', __('Pic'));
        $form->image('head', __('Head'));

        return $form;
    }
}
