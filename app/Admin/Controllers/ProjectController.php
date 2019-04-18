<?php

namespace App\Admin\Controllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;

class ProjectController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('项目列表')
            ->description('详情')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('项目展示')
            ->description('详情')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('项目编辑')
            ->description('详细内容')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('项目创建')
            ->description('详情')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project);

        $grid->number('序号');
        $grid->rows(function ($row,$number){
           $row->column('number',$number+1);
        });

        $grid->id('项目id');
        $grid->name('项目名称');
        $grid->admin_users('项目成员')->display(function ($users) {

            $users = array_map(function ($user) {
                return "<span class='label label-success'>{$user['name']}</span>";
            }, $users);

            return join('&nbsp;', $users);
        });
        $grid->start_date('开始日期');
        $grid->end_date('结束日期');
        $grid->person_liable('当前负责人')
            ->display(function ($userId){
                return Admin::user()->find($userId)->name;
            });
        $grid->upload_authorization_key('上传授权码');
        $grid->download_authorization_key('下载授权码');
        $grid->content('项目简介');
        /*$grid->created_at('Created at');
        $grid->updated_at('Updated at');*/

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Project::findOrFail($id));

        $show->id('项目id');
        $show->name('项目名称');
        $show->start_date('开始日期');
        $show->end_date('结束日期');
        $show->person_liable('当前负责人');
        $show->upload_authorization_key('上传授权码');
        $show->download_authorization_key('下载授权码');
        $show->content('项目简介');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Project);

        $form->display('id','ID');
        $form->text('name', '项目名称');
        $form->date('start_date', '开始日期')->default(date('Y-m-d'));
        $form->date('end_date', '结束日期')->default(date('Y-m-d'));
        $form->select('person_liable', '当前负责人')
            ->options(Admin::user()->pluck('name','id'));
        $form->text('upload_authorization_key', '上传授权码');
        $form->text('download_authorization_key', '下载授权码');
        $form->textarea('content', '项目简介');
        $form->multipleSelect('admin_users','项目成员选择')
            ->options(Admin::user()->pluck('name', 'id'));

        /*$data=Admin::menu();
        dd($data);*/

        /*$form->saving(function (Form $form){
           $name=$form->name;
        });*/

        return $form;
    }
}
