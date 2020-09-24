<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'playlists';

    /**
     * Run the migrations.
     * @table playlist
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('privatePlaylist')->default('1');
            $table->string('discription')->nullable()->default(null);
            $table->unsignedBigInteger('channel_ID');
            $table->timestamps();

            $table->foreign('channel_ID')
                ->references('id')->on('channels')
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
