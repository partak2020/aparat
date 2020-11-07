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
            $table->id();
            $table->string('fileAddress');
            $table->string('title');
            $table->text('discription');
            $table->boolean('status')->default(0);
            $table->boolean('commentStatus')->default(0);
            $table->string('videoID', 5);
            $table->unsignedBigInteger('aparatcategory_ID');
            $table->timestamp('duration');
            $table->timestamps();

            $table->foreign('aparatcategory_ID')
                ->references('id')->on('aparatcategories')
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
