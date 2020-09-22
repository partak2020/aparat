<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'follower';

    /**
     * Run the migrations.
     * @table follower
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');


            $table->foreign('ID', 'follower_ID')
                ->references('ID')->on('userchannel')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID', 'follower_ID')
                ->references('ID')->on('userchannel')
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
