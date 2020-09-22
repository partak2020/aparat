<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'playlist';

    /**
     * Run the migrations.
     * @table playlist
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('name', 50);
            $table->tinyInteger('privatePlaylist')->default('1');
            $table->string('discription', 150)->nullable()->default(null);


            $table->foreign('ID', 'playlist_ID')
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
