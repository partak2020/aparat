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
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->text('discription');


            $table->foreign('ID', 'videocomments_ID')
                ->references('ID')->on('userchannel')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID', 'videocomments_ID')
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
