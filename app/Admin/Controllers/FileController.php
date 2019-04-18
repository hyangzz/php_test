<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\Files;
use App\Models\Folder;
class FileController extends Controller
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
            ->header('Index')
            ->description('description')
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
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }


    /**
     * Test interface.
     *
     * @return Content
     */
    public function main(Content $content,$projectname,$projectid,$folder_id=0)
    {
        $filelist=[];
        $folderlist=[];
        $bread=[];
        $folder_bread=[];
        $bread[]=['text'=>$projectname,'url'=>"/file/{$projectname}/{$projectid}"];
        
        if(!$folder_id){//如果没有文件名，就查找根目录
            $filelist=Files::where('folder_id', '=', 0)->where('project_id', '=', $projectid)->get()->toArray();
            $folderlist=Folder::where('parent_id', '=', 0)->where('project_id', '=', $projectid)->get()->toArray();
        }else{
            
            $cur_folder=Folder::find($folder_id);
            $folder_bread[]=['text'=>$cur_folder->folder_name,'url'=>"/file/{$projectname}/{$projectid}/{$cur_folder->id}"];
            while($cur_folder->parent_id){
                $cur_folder=Folder::find($cur_folder->parent_id);
                $folder_bread[]=['text'=>$cur_folder->folder_name,'url'=>"/file/{$projectname}/{$projectid}/{$cur_folder->id}"];
            }
            $filelist=Files::where('folder_id', '=', $folder_id)->where('project_id', '=', $projectid)->get()->toArray();
            $folderlist=Folder::where('parent_id', '=', $folder_id)->where('project_id', '=', $projectid)->get()->toArray();
        }
        
        foreach ($folderlist as $key => $value) {
            $folderlist[$key]['files']=Files::where('folder_id', '=', $value['id'])->where('project_id', '=', $projectid)->get()->toArray();
        }
        if($folder_bread){
            $bread=array_merge($bread,array_reverse($folder_bread));
        }
        return $content
        ->breadcrumb(...$bread)
        ->body(view('/admin/file/main',[
            'file'=>$filelist,
            'folders'=>$folderlist,
            'projectname'=>$projectname,
            'projectid'=>$projectid,
            'folderid'=>$folder_id
        ]));
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
            ->header('Edit')
            ->description('description')
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
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Files);

        $grid->id('ID')->sortable();
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(Files::findOrFail($id));

        $show->id('ID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Files);

        $form->display('id', 'ID');
        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
