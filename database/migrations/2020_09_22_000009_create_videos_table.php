<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'videos';

    /**
     * Run the migrations.
     * @table videos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('fileAddress', 200);
            $table->string('name', 50)->nullable()->default(null);
            $table->text('discription')->nullable()->default(null);
            $table->string('aparatCategories', 50)->nullable()->default(null);
            $table->tinyInteger('release')->nullable()->default('0');
            $table->date('date');
            $table->string('videoID', 5);


            $table->foreign('ID', 'videos_ID')
                ->references('ID')->on('aparatcategories')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID', 'videos_ID')
                ->references('ID')->on('channelcategories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
