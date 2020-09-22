<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserchannelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'userchannel';

    /**
     * Run the migrations.
     * @table userchannel
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('username', 50)->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null);
            $table->string('phoneNo', 10)->nullable()->default(null);
            $table->string('password', 50)->nullable()->default(null);
            $table->string('name', 50)->nullable()->default(null);
            $table->string('about', 150)->nullable()->default(null);
            $table->string('websiteAddress', 50)->nullable()->default(null);
            $table->string('lenzorAddress', 50)->nullable()->default(null);
            $table->string('twitterAddress', 50)->nullable()->default(null);
            $table->string('facebookAddress', 50)->nullable()->default(null);
            $table->string('telegramAddress', 50)->nullable()->default(null);
            $table->string('instagramAddress', 50)->nullable()->default(null);
            $table->binary('postComment')->default('0\0');
            $table->tinyInteger('alarm_liked')->nullable()->default('1');
            $table->tinyInteger('alarm_comment')->nullable()->default('1');
            $table->tinyInteger('alarm_follow')->nullable()->default('1');
            $table->tinyInteger('alarm_buySubscription')->nullable()->default('0');
            $table->tinyInteger('alarm_sharing')->nullable()->default('0');
            $table->tinyInteger('alarm_event')->nullable()->default('1');
            $table->string('profilePicture', 150)->nullable()->default(null);
            $table->date('createDate');
            $table->string('natural_name', 50)->nullable()->default(null);
            $table->string('natural_phoneNo', 10)->nullable()->default(null);
            $table->string('natural_IDcode', 10)->nullable()->default(null);
            $table->string('natural_address', 150)->nullable()->default(null);
            $table->string('juridical_name', 50)->nullable()->default(null);
            $table->string('juridical_IDcode', 11)->nullable()->default(null);
            $table->string('juridical_economicCode', 12)->nullable()->default(null);
            $table->string('juridical_registrationNo', 5)->nullable()->default(null);
            $table->string('juridical_phoneNo', 11)->nullable()->default(null);
            $table->string('juridical_cellPhoneNo', 10)->nullable()->default(null);
            $table->string('juridical_address', 150)->nullable()->default(null);


            $table->foreign('ID', 'userchannel_ID')
                ->references('ID')->on('aparatcategories')
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
