<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlarmsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'alarms';

    /**
     * Run the migrations.
     * @table alarm
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('doer_ID');
            $table->unsignedBigInteger('object_ID');
            $table->unsignedBigInteger('video_ID');
            $table->timestamps();

            $table->foreign('doer_ID')
                ->references('id')->on('channels')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('object_ID')
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
