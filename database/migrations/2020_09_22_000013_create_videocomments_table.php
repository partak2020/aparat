<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideocommentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'videocomments';

    /**
     * Run the migrations.
     * @table videocomments
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->text('discription');
            $table->unsignedBigInteger('userchannel_ID');
            $table->unsignedBigInteger('video_ID');
            $table->timestamps();

            $table->foreign('userchannel_ID')
                ->references('id')->on('channels')
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
