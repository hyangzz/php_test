<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folder_name')->default("")->comment('文件夹名字');
            $table->integer('parent_id')->default(0)->comment('父级文件夹id');
            $table->integer('project_id')->default(0)->comment('项目id');
            $table->integer('created_user_id')->default(0)->comment('上传人id');
            $table->string('created_user_name')->default("")->comment('上传人name');
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
        Schema::dropIfExists('folders');
    }
}
