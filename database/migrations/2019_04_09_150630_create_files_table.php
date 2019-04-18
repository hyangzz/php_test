<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_name')->comment('文件名');
            $table->string('file_size')->comment('文件大小');
            $table->string('file_ext')->comment('文件扩展名');
            $table->integer('folder_id')->default(0)->comment('文件夹id');
            $table->integer('project_id')->default(0)->comment('项目id');
            $table->integer('upload_user_id')->default(0)->comment('上传人id');
            $table->string('upload_user_name')->default("")->comment('上传人name');
            $table->text('oss_url')->comment('oss的下载链接');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
