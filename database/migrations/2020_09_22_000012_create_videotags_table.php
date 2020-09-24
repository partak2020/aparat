<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideotagsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'videotags';

    /**
     * Run the migrations.
     * @table videotags
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_ID');
            $table->unsignedBigInteger('video_ID');
            $table->timestamps();

            $table->foreign('tag_ID')
                ->references('id')->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('video_ID')
                ->references('id')->on('videos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
