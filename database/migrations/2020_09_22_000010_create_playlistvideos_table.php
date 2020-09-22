<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistvideosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'playlistvideos';

    /**
     * Run the migrations.
     * @table playlistvideos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');


            $table->foreign('ID', 'playlistvideos_ID')
                ->references('ID')->on('playlist')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID', 'playlistvideos_ID')
                ->references('ID')->on('videos')
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
