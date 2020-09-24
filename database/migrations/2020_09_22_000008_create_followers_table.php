<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'followers';

    /**
     * Run the migrations.
     * @table follower
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('follower_ID');
            $table->unsignedBigInteger('following_ID');
            $table->timestamps();

            $table->foreign('follower_ID')
                ->references('id')->on('channels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('following_ID')
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
